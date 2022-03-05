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
    public $cartTotal;

    use CartTrats;

    public function HandelCuopone()
    {
        // dd($this->CouponCode);
        try {
            $CouponCode = $this->CouponCode;
            $Coupon =  Coupons::where('coupon', $CouponCode)->where('cart_value', '<=', FacadesCart::total())->first();
            if (!$Coupon) {
                // dd('nont');
                $this->emit('ErrorMessage', 'Your Copone Code Is InValid');
                // dd('emited succesffuly');
                $this->cartTotal  = FacadesCart::total();
            } else {
                // dd('good');
                session()->put('coupon', [
                    'code'  => $Coupon->coupon,
                    'cart_value'  => $Coupon->cart_value,
                    'value'  => $Coupon->value,
                    'type' => $Coupon->type,
                ]);

                if(!$Coupon->type = 'fixed'){
                    $discount = (FacadesCart::total() * $Coupon->value) / 100 ;
                 }else{
                     $discount = FacadesCart::total()  -  $Coupon->value;
                 }
                $this->cartTotal = FacadesCart::total() - $discount;
                // dd(session());
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.components.cart')
            ->layout('layouts.theme');
    }
}
