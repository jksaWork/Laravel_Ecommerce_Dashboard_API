<?php

namespace App\Traits;

use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

trait CartTrats
{

    public function increaseQuantity($CartId)
    {
        // dd($CartId);
        $Cart = FacadesCart::get($CartId);
        // dd($Cart);
        $qty = $Cart->qty + 1;
        FacadesCart::update($CartId, $qty);
        $this->render();
    }

    public function DecreaseQuantity($CartId)
    {
        $Cart = FacadesCart::get($CartId);
        $qty = $Cart->qty - 1;
        FacadesCart::update($CartId, $qty);
    }


    public function removeProduct($rowId)
    {
        FacadesCart::remove($rowId);
    }

    public function removeAllProduct()
    {
        FacadesCart::destroy();
    }

    public function AddToCart($Product)
    {
        // dd($Product);

        FacadesCart::add($Product['id'], $Product['name'], 1,  $Product['regular_price'])->associate('App\Models\Product');
        // notify('whats do you mean about borsers' , 'done Successful');
        $this->emit('addToCartSuccess');
        // notify('add to card successfuly');

    }


    public function AddToWishCart($Product)
    {
        // dd($Product);

        FacadesCart::instance('wishlist')->add($Product['id'], $Product['name'], 1,  $Product['regular_price'])->associate('App\Models\Product');
        // notify('whats do you mean about borsers' , 'done Successful');
        $this->emit('addToWishSuccess');
        // notify('add to card successfuly');

    }


    public function removeProductFormWishlist($rowId)
    {
        // dd('remvoe function ');
        FacadesCart::instance('wishlist')->remove($rowId);
        $this->emit('RemoveFromCart', 'this Item Remove From Whishlist ');
    }

    public function removeAllProductFormWishlist()
    {
        // dd('jksa altigani osman');
        FacadesCart::instance('wishlist')->destroy();
    }
}
