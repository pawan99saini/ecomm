<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserOrder;
use App\Models\Payment;
use Razorpay\Api\Api;
use Session,Exception;

class RazorPayController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));
                if($response->status === 'captured'){

                    $user_order = UserOrder::where('id',$request->booking_id)->first();
                    $user_order->payment_status = 1;
                    $user_order->payment_data = json_encode($response->toArray());
                    $user_order->save();

                    $Payment = new Payment;
                    $Payment->user_id = $user_order->user_id;
                    $Payment->order_id = $user_order->order_id;
                    $Payment->transaction_id = $response->id;
                    $Payment->type = 'online';
                    $Payment->amount = $user_order->total_amount;
                    $Payment->save();


                } else {
                    Session::put('error', 'Payment failed, please try again!');
                    return redirect()->back();
                }
            } catch (Exception $e) {

                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}
