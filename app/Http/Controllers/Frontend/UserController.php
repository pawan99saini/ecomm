<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\UserOrder;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateUser(Request $request) {
        $user = User::find(auth()->user()->id)->update($request->all());
        if($user){
            return ['response' => 'success', 'user'=> $user];
        }
    }

    public function myAccount(){
        return view('new-frontend.home.my_account');
    }

    public function myOrders(){
        $user_id = auth()->user()->id ?? 'N/A';
        $userOrders = UserOrder::where('user_id', $user_id)->where('status','!=',5)->get();
        return view('new-frontend.home.my_order' , compact('userOrders'));
    }

    public function trackOrder(Request $request) {
        $userOrder = UserOrder::find($request->id);
        return view('new-frontend.home.components.track-order' , compact('userOrder'));
    }

    public function returnOrder(Request $request) {
        $userOrder = UserOrder::where('id',$request->id)->update(['status' => 5]);
        if ($userOrder) {
            return ['status' => true];
        }else{
            return ['status' => false];
        }
    }

    public function viewMyOrder($id){
        $orders = Order::where('order_id', $id)->get();
        return view('new-frontend.home.view_my_order' , compact('orders'));
    }

}
