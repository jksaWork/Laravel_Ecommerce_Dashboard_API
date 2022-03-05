<?php

namespace App\Http\Livewire\Components;

use App\Models\OfferSaleDate;
use App\Models\Product;
use App\Traits\CartTrats;
use Carbon\Carbon;
use Livewire\Component;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class OnSlateProduct extends Component
{
    use CartTrats;
    public function render()
    {

        $Prodcuts =  Product::with('Category')->where('sale_price' ,'>' , 0)->limit(2)->get();
        $OfferSale = OfferSaleDate::first();
        $Day = Carbon::parse($OfferSale->offer_sale)->format('d');
        // dd($Day);
        $Sec =  Carbon::parse($OfferSale->offer_sale)->format('s');
        // dd($Sec);

        return view('livewire.components.on-slate-product', [
            'Prodcuts'=> $Prodcuts,
            'OfferSale' => $OfferSale,
            'Day'=> $Day,
            'Sec'=> $Sec,
            'Min' => Carbon::parse(now())->format('m'),
        ]);
    }
}
