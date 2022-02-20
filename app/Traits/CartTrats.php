<?php

namespace App\Traits;

use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

trait CartTrats {

    public function increaseQuantity($CartId){
        // dd($CartId);
            $Cart = FacadesCart::get($CartId);
            // dd($Cart);
            $qty = $Cart->qty + 1;
            FacadesCart::update($CartId , $qty);
            $this->render();
        }

        public function DecreaseQuantity($CartId){
            $Cart = FacadesCart::get($CartId);
            $qty = $Cart->qty - 1;
            FacadesCart::update($CartId , $qty);
        }


        public function removeProduct($rowId){
            FacadesCart::remove($rowId);
        }

        public function removeAllProduct(){
            FacadesCart::destroy();
        }

}
