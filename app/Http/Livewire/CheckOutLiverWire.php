<?php

namespace App\Http\Livewire;

use App\Models\Coupons;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use App\Traits\CartTrats;
use Exception;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CheckOutLiverWire extends Component
{
    use CartTrats;
    public $cartTotal, $CouponCode, $payment_method, $city;
    public $streat_address_line_1, $phone, $order_note,   $streat_address_line_2, $email, $zip, $firstname, $lastname;
    public function mount()
    {
        if (!session()->has('check_out')) \redirect()->to('/');
        // dd('billing_data');
        if (session()->has('billing_data')) {
            // dd(session()->get('billing_data'));
            $BillingData = session()->get('billing_data');
            $this->streat_address_line_1 = $BillingData['streat_address_line_1'];
            $this->phone = $BillingData['phone'];
            $this->order_note = $BillingData['order_note'];
            $this->streat_address_line_2  = $BillingData['streat_address_line_2'];
            $this->email  = $BillingData['email'];
            $this->zip = $BillingData['zip'];
            $this->firstname  = $BillingData['firstname'];
            $this->lastname = $BillingData['lastname'];
        }
    }

    public function PalceOrder()
    {
        $this->val();
        $ChekOut = session()->get('check_out');
        // dd('hello');
        // dd($this->payment_method);
        $order = new Order();
        $order->dicount = $ChekOut['discount'];
        $order->tax = $ChekOut['tax'];
        $order->total = $ChekOut['total'];
        $order->first_name = $this->firstname;
        $order->last_name = $this->lastname;
        $order->phone = $this->phone;
        $order->line_1 = $this->streat_address_line_1;
        $order->line_2 = $this->streat_address_line_2;
        $order->city = $this->city;
        // $order->provincy = 'sad';
        $order->count = 1;
        $order->zip_code = $this->zip;
        $order->is_shiping = '';
        $order->sub_total = $ChekOut['sub_total'];
        $order->save();
        // dd($order);
        if (Cart::instance('cart')->count()  > 0) {
            foreach (Cart::instance('cart')->content() as $item) {

                $orderItem = new  OrderItem();
                $orderItem->price = $item->price;
                $orderItem->quantity = $item->qty;
                $orderItem->product_id = $item->model->id;
                $orderItem->order_id = $order->id;
                $orderItem->save();
            }
        } // end item Cart to databases

        if (true) {
            $transaction = new Transaction;
            $transaction->order_id = $order->id;
            $transaction->mode = 'cod';
            $transaction->status = 'pending';
            $transaction->save();
        }
        $this->emit('chekOutDoneSuccessfuly');
        // dd('done');
        // ShoppingcartCart::deleteStoredCart('cart');
        Cart::destroy();
    }

    public function HandelCuopone()
    {
        // dd($this->CouponCode) =
        // JksaProcess
        try {
            $CouponCode = $this->CouponCode;
            $Coupon =  Coupons::where('coupon', $CouponCode)->where('cart_value', '<=', Cart::total())->first();
            if (!$Coupon) {
                // dd('nont');
                $this->emit('ErrorMessage', 'Your Copone Code Is InValid');
                // dd('emited succesffuly');
                $this->cartTotal  = Cart::instance('cart')->total();
            } else {
                // dd('good');
                session()->put('coupon', [
                    'code'  => $Coupon->coupon,
                    'cart_value'  => $Coupon->cart_value,
                    'value'  => $Coupon->value,
                    'type' => $Coupon->type,
                ]);

                if (!$Coupon->type = 'fixed') {
                    $discount = (Cart::instance('cart')->total() * $Coupon->value) / 100;
                } else {
                    $discount = Cart::instance('cart')->total()  -  $Coupon->value;
                }
                $this->cartTotal = Cart::instance('cart')->total() - $discount;
                // dd(session());
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function SaveBillingDetails()
    {
        // dd('jksa');
        $validData =  $this->val();
        session()->put(
            'billing_data',
            $validData
        );
        // $this->emit('RemoveFromCart', 'Data Was Saved ' );
        // dd($validData);
    }
    public function val()
    {
        return $validData = $this->validate(
            [
                'email' => 'required',
                'phone' => 'required',
                'lastname' => 'required',
                'firstname' => 'required',
                'streat_address_line_1' => 'required',
                'streat_address_line_2' => 'required',
                'zip' => 'required',
                'city' => 'required',
                'order_note' => 'required',
            ]
        );
    }
    public function render()
    {
        // dd(session()->get('check_out'));
        // $this->SaveBillingDetails();
        return view('livewire.check-out-liver-wire')
            ->layout('layouts.theme');
    }
}
