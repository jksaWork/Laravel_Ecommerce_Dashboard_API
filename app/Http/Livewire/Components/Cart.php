<?php

namespace App\Http\Livewire\Components;

use App\Models\Coupons;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Livewire\Component;
use App\Traits\CartTrats;
use Exception;
// use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\CartItem;

class Cart extends Component
{
    public $CouponCode;
    public $cartTotal ,  $discount , $subtotalAfterDisscount, $totalAfterDisCount;

    // 'sub_total' => $this->,

    use CartTrats;

    public function mount()
    {
        $this->cartTotal = FacadesCart::instance('cart')->total();
    }
    public function toCheckOut()
    {
        if (auth()->guard('customers')->check()) {
            return \redirect()->route('checkout');
        } else {
            return redirect()->route('login');
        }
    }


    public function setCheckOut()
    {
        if (session()->has('coupon')) {
            session()->put(
                'check_out',
                [
                    'discount' => $this->discount,
                    'total' => $this->totalAfterDisCount,
                    'tax' => $this->taxAfterDsscount,
                    'sub_total' => $this->subtotalAfterDisscount,
                ]
            );
        }else{
            session()->put(
                'check_out',
                [
                    'discount' => 0,
                    'total' => FacadesCart::instance('cart')->total(),
                    'tax' => FacadesCart::instance('cart')->tax(),
                    'sub_total' => FacadesCart::instance('cart')->subtotal()
                ]
            );
        }
    }

    public function HandelCuopone()
    {
        try {
            $CouponCode = $this->CouponCode;
            $Coupon =  Coupons::where('coupon', $CouponCode)->where('cart_value', '<=', FacadesCart::total())->first();
            if (!$Coupon) {
                // dd('nont');
                $this->emit('ErrorMessage', 'Your Copone Code Is InValid');
                // dd('emited succesffuly');
                $this->cartTotal  = FacadesCart::instance('cart')->total();
            } else {
                // dd('good');
                session()->put('coupon', [
                    'code'  => $Coupon->coupon,
                    'cart_value'  => $Coupon->cart_value,
                    'value'  => $Coupon->value,
                    'type' => $Coupon->type,
                ]);

                if (!$Coupon->type = 'fixed') {
                    $this->discount = (FacadesCart::instance('cart')->total() * $Coupon->value) / 100;
                } else {
                    $this->discount = FacadesCart::instance('cart')->total()  -  $Coupon->value;
                }
                $this->cartTotal = FacadesCart::instance('cart')->total() - $this->discount;
                $this->subtotalAfterDisscount = FacadesCart::instance('cart')->total() - $this->discount;
                $this->tax = FacadesCart::instance('cart')->total() - $this->discount;
                $this->taxAfterDsscount = FacadesCart::instance('cart')->tax() * .7;
                $this->totalAfterDisCount = $this->subtotalAfterDisscount + $this->taxAfterDsscount ;
                // dd(session());
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function render()
    {
        $this->setCheckOut();
        return view('livewire.components.cart')
            ->layout('layouts.theme');
    }
}
