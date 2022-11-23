<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Coupon;
use Carbon\Carbon;
use App\Models\Pincode;
use Auth;

class CartController extends Controller
{
    public function index(){
        
        
        return view('new-frontend.home.shopping_cart');
    }
    
    
    public function sidebarcarthtml(){
        $type = $_GET['b'];
        $cartItems = \Cart::getContent();
        $total = \Cart::getTotal();
        $totalQty = \Cart::getTotalQuantity();
        if($totalQty>0){
            $chtml = '<ul class="mini-cart">';
            foreach($cartItems as $rt){
                    $url = url('/').'/'.$rt->attributes->slug;
                    $image = asset('file').'/'.$rt->attributes->image;
                    $chtml .='<li class="mini-cart-item">
                                <a href="javascript:void(0);" class="remove remove_from_cart_button" aria-label="Remove this item"
                                data-product_id="'.$rt->id.'" onclick="removeItemFromSidebar($(this))">×</a>
                                <a href="'.$url.'"><img onerror="handleError(this);"src="'.$image.'" alt="">'.$rt->name.'</a>
                                <span class="quantity">'.$rt->quantity.' × <span class="mini-cart-price"><span class="price">₹'.$rt->price.'</span></span></span>
                            </li>';
            }
            $chtml .= '</ul>';    
            $chtml .='<p class="mini-cart-total">
                           <strong>Subtotal:</strong> <span class="mini-cart-price"><span class="price">₹'.$total.'</span> </span>
                        </p>';
        }else{
            $chtml = '<ul class="mini-cart">
                        <li class="mini-cart-item text-center">
                              No Item In cart
                        </li>
                    </ul>
                    <p class="mini-cart-total">
                       <strong>Subtotal:</strong> <span class="mini-cart-price"><span class="price">₹0</span> </span>
                    </p>';
        }

        $tax = 0;
        // $cartItems = \Cart::getContent();
        // foreach($cartItems as $item){
        //     if($item->price < 1000){
        //         $mrp1 = $item->price / 1.05;
        //         $tax +=($item->price - $mrp1) * $item->quantity;
        //     } else {
        //         $mrp1 = $item->price / 1.12;
        //         $tax += ($item->price - $mrp1) * $item->quantity;
        //     }
        // }

        $carttotal = $total;
        $carttotal = $carttotal - $tax;
        $grandTotal = round($total);
        $total = $carttotal;

        $grandTotal = number_format(round($grandTotal), 2);
        $tax = number_format($tax, 2);
        $carttotal = number_format($carttotal, 2);

        return response()->json(['html'=>$chtml,'qty'=>$totalQty,'carttotal'=>$carttotal,'grandTotal'=>$grandTotal,'tax'=>$tax],200);
    }
    
    public function removeitemsidebar(Request $request){
        \Cart::remove($request->id);
        $total = \Cart::getTotal();
        $totalQty = \Cart::getTotalQuantity();
        $cdiscount = \Session::get('coupon_discount');
        $cdiscount = ($cdiscount>0)?$cdiscount:0;
        $grandTotal  = $total-$cdiscount;
        $tax = ($total / 1.12);
        $total = $total-$tax;
        return response()->json(['qty'=>$totalQty,'carttotal'=>$total,'grandTotal'=>$grandTotal,'tax'=>$tax],200);
    }
    
    function updateqty(Request $request){
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->qty
                ],
            ]
        );
        $iem = \Cart::get($request->id);
        $ttax = $this->getTotalTax();
        $itemtotal = $iem->quantity*$iem->price;
        $total = \Cart::getTotal();
        $totalQty = \Cart::getTotalQuantity();
        $cdiscount = \Session::get('coupon_discount');
        $cdiscount = ($cdiscount>0)?$cdiscount:0;
        $grandTotal  = $total-$cdiscount;
        // $tax = $this->getTotalTax();
        $tax = ($total / 1.12);
        $total = $total-$tax;
        return response()->json(['itemtotal'=>$itemtotal,'qty'=>$totalQty,'carttotal'=>$total,'grandTotal'=>$grandTotal,'tax'=>$tax],200);
    }

    function getTotalTax(){
        $tt = 0 ;
        $carts = \Cart::getContent();
        foreach($carts as $cay){
            $rt = 0;
            if($cay->price<1000){
                $g = $cay->price/1.05;
                $rt = $g*(5/100);
            }else{
                $g = $cay->price/1.12;
                $rt = $g*(12/100);
            }
            $rt = $rt*$cay->quantity;
            $tt += $rt;
        }
        return round($tt,2);
    }

    function checkBeforeApply($coupon){
        $carts = \Cart::getContent();
        $tt = 0 ;
        foreach($carts as $cay){
            $attrs = $cay->attributes->coupons;
            foreach($attrs as $r){
                if($r->code == trim($coupon)){
                    $tt += $cay->price*$cay->quantity;
                }
            }
        }
        return $tt;
    }

    public function apply_coupon(Request $request)
    {
        
        \Session::put('coupon', '');
        \Session::put('coupon_discount', 0);

        $coupon_type = [0,1,2,3,4,5];

        if($request->payment_input == "wallet" || $request->payment_input == "razorpay"){
            $coupon_type[] = 3;
        }
        
        $coupon = Coupon::where('valid_from','<=', Carbon::now())->where('valid_to','>=', Carbon::now())
                  ->where('status',1)
                  ->where('code',$request->coupon)
                  ->whereIn('coupon_type',$coupon_type)
                  ->whereIn('user_type',[0,1,2,4])
                  ->first();
        
        $amount = \Cart::getTotal();

        $discount_price = 0;

        if($coupon){
           if($coupon->customer_id >0 && !Auth::check()){
                return response()->json([
                    'success' => true,
                    'code' => 404,
                    'message' => 'Please login before you apply your individual coupon',
                ]);
           }
           if($coupon->customer_id >0 && $coupon->customer_id != Auth::user()->id){
                return response()->json([
                    'success' => true,
                    'code' => 404,
                    'message' => 'Invalid coupon',
                ]);
           }
           $cvalue  = $this->checkBeforeApply($request->coupon);
           $amount = ($cvalue>0)?$cvalue:$amount;
           if($amount > $coupon->min_cart_amount){
               $discount = 0;
               if($coupon->discount_type == 1){
                $discount = $coupon->value;
               } else {
                $discount = ($amount/100)  * $coupon->value ;
               }
            //    $discount = round(($discount>$coupon->max_discount)?$coupon->max_discount:$discount,2);
                $discount = round($discount);

            
               \Session::put('coupon', $request->coupon);
               \Session::put('coupon_discount', $discount);
 
            //    $cdiscount = \Session::get('coupon_discount');
            //    $total = \Cart::getTotal();
            //    $cdiscount = ($cdiscount>0)?$cdiscount:0;
            //    $grandTotal  = $total-$cdiscount;
            //    $tax = ($grandTotal / 100) * 1.12;
            //    $grandTotal = number_format($grandTotal + $tax , 2);
 
               $cdiscount = \Session::get('coupon_discount');
               $carttotal = \Cart::getTotal();
                $coupon_discount = ($cdiscount>0)?$cdiscount:0;
               $total  = $carttotal;

               $tax = 0;
                // $cartItems = \Cart::getContent();
                // foreach($cartItems as $item){
                //     if($item->price < 1000){
                //         $mrp1 = $item->price / 1.05;
                //         $tax +=($item->price - $mrp1) * $item->quantity;
                //     } else {
                //         $mrp1 = $item->price / 1.12;
                //         $tax += ($item->price - $mrp1) * $item->quantity;
                //     }
                // }

                $carttotal = $total - $tax;

            //    $tax = ($carttotal / 100) * 1.12;
            //    $carttotal = $carttotal - $tax;
               $grandTotal = round(($carttotal + $tax) - $coupon_discount);
               $carttotal = number_format($carttotal, 2);
               $tax = number_format($tax, 2);


                // $carttotal  = $carttotal-$coupon_discount;
                // $tax = ($carttotal / 100) * 1.12;
                // $carttotal = $carttotal - $tax;
                // $grandTotal = $carttotal + $tax;
                // $carttotal = $carttotal + $coupon_discount;
               return response()->json([
                    'success' => true,
                    'code' => 200,
                    'message' => 'Coupon Apply successfully',
                    'coupon_price' => $discount,
                    'tax' => $tax,
                    'carttotal' => $carttotal,
                    'grandTotal'=>$grandTotal
                ]);

           }
           else{
            \Session::put('coupon', '');
            \Session::put('coupon_discount', 0);

                return response()->json([
                    'success' => true,
                    'code' => 403,
                    'message' => 'Order amount should be more then Rs'.$coupon->min_cart_amount,
                ]);
            }

        }else{
            return response()->json([
                'success' => true,
                'code' => 404,
                'message' => 'Invalid coupon',
            ]);
        }
    }
    
    function remove_coupon(){
        if(\Session::get('coupon')){
            \Session::put('coupon', 0);
            \Session::put('coupon_discount', 0);
            $total = \Cart::getTotal(); 
            $cdiscount = \Session::get('coupon_discount');
            $cdiscount = ($cdiscount>0)?$cdiscount:0;
            $grandTotal  = $total-$cdiscount;
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'Coupon removed',
                'grandTotal'=>$grandTotal
            ]);
        }else{
           return response()->json([
                'success' => true,
                'code' => 404,
                'message' => 'Invalid coupon to be removed',
            ]); 
        }
    }

}
