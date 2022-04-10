<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Stripe;
use Auth;
 
class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }
    public function payStripe(Request $request)
    {
        $this->validate($request, [
            'card_no' => 'required',
            'expiry_month' => 'required',
            'expiry_year' => 'required',
            'cvv' => 'required',
        ]);
 
        $stripe = Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            $response = \Stripe\Token::create(array(
                "card" => array(
                    "number"    => $request->input('card_no'),
                    "exp_month" => $request->input('expiry_month'),
                    "exp_year"  => $request->input('expiry_year'),
                    "cvc"       => $request->input('cvv')
                )));
            if (!isset($response['id'])) {
                return redirect()->route('addmoney.paymentstripe');
            }
            $charge = \Stripe\Charge::create([
                'card' => $response['id'],
                'currency' => 'USD',
                'amount' =>  100 * 100,
                'description' => 'wallet',
            ]);
            if($charge['status'] == 'succeeded') {

                $dataPayment['user_id'] = Auth::user()->id;
                $dataPayment['amount'] = $charge['amount'] / 100 ;
                $dataPayment['payment_id'] = $charge['id'];
                $dataPayment['currency'] = $charge['currency'];
                $dataPayment['status'] = $charge['status'];
                $dataPayment['card'] = $charge['payment_method_details']['card']['brand'];
                $dataPayment['country'] = $charge['payment_method_details']['card']['country'];
dd( $dataPayment);
                $payment = Payment::crate( $dataPayment);
                
                $order = Order::where('id', sesion()->get('order_id'))->first();

                $order->update([
                    //order table 
                    'payment_id' => $payment->id,
                    'is_paid' => true,
                    'payment_status' =>  $dataPayment->status
                ]);
                
                return redirect('stripe')->with('success', 'Payment Success!');
 
            } else {
                return redirect('stripe')->with('error', 'something went to wrong.');
            }
 
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
 
    }
}
?>