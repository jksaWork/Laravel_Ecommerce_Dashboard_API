<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = Product::paginate(12);
        return view('Admin.Products.index', compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Categories =  Category::get();
        return view('Admin.Products.add', compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $Validator = validator($request->all(), [
                'name' => 'required',
                'short_descrption' => 'required',
                'price' => 'required',
                'stock' => 'required|in:"inStock","outOfStock"',
                'SKU' => 'required',
                'image' => 'required',
                'quantitiy' => 'required|integer',
                'category_id' => 'required',
            ]);
            $fileName = '';
            if ($request->has('image')) {
                $fileName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('assets/images/images/products/'), $fileName);
            }

            $initInsertToDataBase = [
                'short_description' => $request->short_descrption,
                'quantity' => $request->quantitiy,
                'regular_price' => $request->price,
                'SKU' => $request->SKU,
                'stock' => $request->stock,
                'image' => $fileName,
                'name' => $request->name,
                'category_id' => $request->category_id,
            ];
            // return $request;



            Product::create($initInsertToDataBase);

        }
        catch(Exception $e){
            return $e;
        }
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
