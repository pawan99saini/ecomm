<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Wallet;
use App\Models\Product;
use App\Models\UserAddress;
use App\Models\Order;
use App\Models\OrderDiscount;
use App\Models\UserOrder;
use App\Models\Payment;
use App\Models\RefundReason;
use App\Models\Wishlist;
use App\Models\ProductVariation;
use DB, Auth,Hash,Session;

class UserAccountController extends Controller
{
    public function index(){
        $auth = Auth::user();
        $user = User::where('id', $auth->id)->first();
        //$wallet = Wallet::where('user_id', $auth->id)->first();
        $orders = UserOrder::where('user_id',$auth->id)->orderBy('id','desc')->count();
        $whis = Wishlist::where('user_id', Auth::user()->id)
                                    ->count();
        return view('store.users.dashboard', compact('auth','orders','whis','user'));
    }
    
    //Google Login
    public function redirectToGoogle(){
        return Socialite::driver('google')->stateless()->redirect();
    }
    
    //Google callback  
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->stateless()->user();
        $this->_registerorLoginUser($user);
        return redirect()->route('home');
    }
    
    //Facebook Login
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->stateless()->redirect();
    }
    
    //facebook callback  
    public function handleFacebookCallback(){
        $user = Socialite::driver('facebook')->stateless()->user();
        $this->_registerorLoginUser($user);
        return redirect()->route('home');
    }
    

    public function changepass(Request $request)
    {
        $this->validate($request, [
            'password' => 'min:6',
            'confirm_password' => 'required_with:password|same:password|min:6'
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = $request->password;
        $user->save();

        return redirect()->back()->with('cp_success','Password changed successfully.');
    }

    public function detail(Request $request)
    {
        $this->validate($request, [
            'city' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::find(Auth::user()->id);


        if($request->has('avatar')){
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('file'), $imageName);
            $user->avatar = $imageName;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->city_id = $request->city;
        $user->save();

        return redirect()->back()->with('detail_success','Detail updated successfully.');
    }

    public function add_to_cart(Request $request)
    {
        // echo($request->product_id);die;


            if (isset($_COOKIE['cart'])) {
                $cart = json_decode($_COOKIE['cart'], true);
                if (isset($cart[$request->product_id])) {
                    if ($request->type == "remove") {
                        unset($cart[$request->product_id]);
                    } else {
                        if ($request->qty_type === 'inner') {
                            $cart[$request->product_id]['qty'] = ($request->qty ?? 1);
                        } else {
                            $cart[$request->product_id]['qty'] = ($cart[$request->product_id]['qty'] + ($request->qty ?? 1));
                        }
                        $cart[$request->product_id]['color_id'] = $request->color_id;
                        $cart[$request->product_id]['size_id'] = $request->size_id;
                    }
                } else {
                    $cart[$request->product_id]['qty'] = ($request->qty ?? 1);
                    $cart[$request->product_id]['color_id'] = $request->color_id;
                    $cart[$request->product_id]['size_id'] = $request->size_id;
                }

            } else {
                if ($request->type == "insert") {
                    $cart[$request->product_id]['qty'] = ($request->qty ?? 1);
                    $cart[$request->product_id]['color_id'] = $request->color_id;
                    $cart[$request->product_id]['size_id'] = $request->size_id;
                }
            }
            setcookie('cart', json_encode($cart), time() + 57456000 * 30, '/');
            // echo $_COOKIE['cart'];
            // die;
            // $product_ids = array_keys($cart);
            // $products = Product::with('productProductImages')->whereIn('id', $product_ids)->get();
            // $price = array_column($products->toArray(), 'price');
            // $ids = array_column($products->toArray(), 'id');
            // $new_price_arr = array_combine($ids, $price);
            $product_arr = [];
            $total_price = 0;

            foreach($cart as $key => $val){
                $product_var = ProductVariation::where('product_id',$key)->where('color_id',$val['color_id'])
                            ->where('size_id',$val['size_id'])->first();

                $product = Product::with('productProductImages')->where('id',$key)->first();

                if($product && $product_var){
                    $price = ($product_var->single_sales_price * $val['qty']);
                    $total_price += $price;
                    $product_arr[$key]['price'] = $price;
                    $product_arr[$key]['qty'] = $val['qty'];
                    $product_arr[$key]['size_id'] = $val['size_id'];
                    $product_arr[$key]['color_id'] = $val['color_id'];
                    $product_arr[$key]['name'] = $product->name ?? "N/A";
                    $product_arr[$key]['image'] = $product->productProductImages[0]->file_name ?? "N/A";
                }
            }
            // foreach ($cart as $key => $val) {
            //     $total_price += $new_price_arr[$key] * $val;
            // }
            $html = view('new-frontend.home.components.cart_item', compact('product_arr'))->render();

            return response()->json([
                'status'        =>  'success',
                'message'       =>  '',
                'html'          =>  $html ?? '',
                'item_count'    => count($cart),
                'cart_items'    => $product_arr,
                'total_price'   => $total_price
            ], 201);

    }

    public function remove_cart(Request $request)
    {
        if(removeCart()){
            return response()->json([
                'status'        =>  'success',
                'message'       =>  '',
            ], 201);
        }else{
            return response()->json([
                'status'        =>  'success',
                'message'       =>  '',
            ], 500);
        }
    }

    public function user_register(Request $request)
    {
        $check_user                     = User::where(function ($query) use ($request) {
            $query->where('email', $request->email);
        })->first();
        if (!$check_user) {
            $insert_user                    = new User();
            $insert_user->name              = $request->name;
            $insert_user->status            = 1;
            $insert_user->email             = $request->email;
            $insert_user->password          = Hash::make($request->password);
            if ($insert_user->save()) {
                return response()->json([
                    'status'    => 'success',
                    'message'   => 'User Registered Successfully',
                    'type'      => 'customer',
                    'table'     => ''
                ], 201);
            } else {
                return response()->json([
                    'status'    => 'failed',
                    'message'   => 'Something Went Wrong. Please Try Again Later...',
                    'table'     => ''
                ], 500);
            }
        } else {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Already a User.Please Login...',
                'table'     => ''
            ], 500);
        }
    }

    public function login(Request $request)
    {
        $requestData = $request->all();
        session()->flush();
        $find_user = User::where('email', $requestData['email'])
            //   ->whereIn('user_type',['user','admin'])
            //   ->where('status', 1)
            ->first();
        if ($find_user) {
            if ($find_user->status == 0) {
                return response()->json([
                    'status' => 'fail',
                    'msg' => "Your Account is Disabled Contact Admin To Login.",
                    500
                ]);
            } else {

                if (Auth::attempt(['email' => $requestData['email'], 'password' => $requestData['password'],])) {
                   $url =  route('home_route');
                    if (Session::get('url.intended')) {
                        $url = Session::get('url.intended');
                        Session::forget('url.intended');
                        return response()->json([
                            'status' => 'success',
                            'redirect' => $url,
                            200
                        ]);
                    } else {

                        return response()->json([
                            'status' => 'success',
                            'redirect' => $url,
                            200
                        ]);
                    }
                } else {
                    return response()->json([
                        'status' => 'fail',
                        'msg' => "Invalid Login",
                        500
                    ]);
                }
            }
        } else {
            return response()->json([
                'status' => 'fail',
                'msg' => "Your record not found or login disable",
                500
            ]);
        }
    }
}
