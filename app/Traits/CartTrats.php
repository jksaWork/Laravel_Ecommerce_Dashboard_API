<?php

namespace App\Traits;

use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

trait CartTrats
{

    public function increaseQuantity($CartId)
    {
        $Cart = FacadesCart::instance('cart')->get($CartId);
        $qty = $Cart->qty + 1;
        FacadesCart::instance('cart')->update($CartId, $qty);
        $this->render();
    }

    public function DecreaseQuantity($CartId)
    {
        $Cart = FacadesCart::instance('cart')->get($CartId);
        $qty = $Cart->qty - 1;
        FacadesCart::instance('cart')->update($CartId, $qty);
    }


    public function removeProduct($rowId)
    {
        FacadesCart::instance('cart')->remove($rowId);
    }

    public function removeAllProduct()
    {
        FacadesCart::instance('cart')->destroy();
    }

    public function AddToCart($Product)
    {
        // dd($Product);

        FacadesCart::instance('cart')->add($Product['id'], $Product['name'], 1,  $Product['regular_price'])->associate('App\Models\Product');
        // notify('whats do you mean about borsers' , 'done Successful');
        $this->emit('addToCartSuccess');
        // notify('add to cart successfuly');

    }


    public function AddToWishCart($Product)
    {
        // dd($Product);

        FacadesCart::instance('wishlist')->add($Product['id'], $Product['name'], 1,  $Product['regular_price'])->associate('App\Models\Product');
        // notify('whats do you mean about borsers' , 'done Successful');
        $this->emit('addToWishSuccess');
        // notify('add to cart successfuly');

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
