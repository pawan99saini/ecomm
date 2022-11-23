<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\UserAddress;
use App\Models\UserOrder;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function placeOrder(Request $request) {
        if(auth()->check()){
            $newOrderId = Order::max('order_id') + 1;
            $user_order = new UserOrder;
            $cart = (isset($_COOKIE['cart'])) ? json_decode($_COOKIE['cart']) : [];
            $total_price = 0;
            if(isset($cart)){
                foreach($cart as $key => $val){
                    $product_var = ProductVariation::where('product_id',$key)
                                                    ->where('color_id',$val->color_id)
                                                    ->where('size_id',$val->size_id)->first();

                    $product = Product::with('productProductImages')->where('id',$key)->first();

                    if($product && $product_var){
                        $price = ($product_var->single_sales_price * $val->qty);
                        $total_price += $price;
                        $placeOrder = new Order;
                        $placeOrder->order_id = $newOrderId;
                        $placeOrder->user_id = auth()->user()->id;
                        $placeOrder->name = $product->name ?? "N/A";
                        $placeOrder->product_id = $key;
                        $placeOrder->size_id = $val->size_id ?? "N/A";
                        $placeOrder->color_id = $val->color_id ?? "N/A";
                        $placeOrder->images = $product->productProductImages[0]->file_name ?? "N/A";
                        $placeOrder->qty = $val->qty ?? 1;
                        $placeOrder->mrp_price = $price;
                        $placeOrder->save();
                    }
                }

                $user_order->order_id = $newOrderId;
                $user_order->user_id = auth()->user()->id;
                $user_order->total_amount = $total_price;
                $user_order->save();

                unset($_COOKIE['cart']);
                setcookie('cart', null, -1, '/');
            }

            $data = $request->all();
            $data['user_id'] = auth()->user()->id;
            if($request->has('by_default')){
            $previousDefault = UserAddress::where('user_id', auth()->user()->id)
                                            ->where('by_default', 1)->first();
                if($previousDefault){
                    $a = UserAddress::find($previousDefault->id)->update(['by_default' => 0]);
                }
            }
            $address = UserAddress::create($data);
            return [
                'success' => true,
                'data' => $user_order,
                'message' => 'Order added successfully'
            ] ;
        }

    }
}
