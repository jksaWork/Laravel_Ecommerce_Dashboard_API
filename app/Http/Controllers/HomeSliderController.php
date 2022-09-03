<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Traits\ChangeStatusTrait;
use Illuminate\Http\Request;


class HomeSliderController extends Controller
{
    // use
    use ChangeStatusTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = HomeSlider::paginate(8);
        return view('Admin.slider.index' , compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // inint rules  ------------------------------
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
        // validaot fails ----------------------------
        $request->validate($rules);

        // $request->image->move(publi)

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/images/blogs/'), $fileName);
        $request['regular_price'] = $request->price;
        // $request->image = $fileName;
        // dd($request->image);
        $HomeSlider  =  HomeSlider::create($request->except('_token', 'price', 'image'));
        $HomeSlider->image = $fileName;
        $HomeSlider->save();
        notify()->success('home Slider Option Added Sucessfuly'  , 'Success  Messages');
        return redirect()->route('homeSlider.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function show($homeSliderId)
    {
       return  $this->ChangeStatusByModel(HomeSlider::class , $homeSliderId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSlider $homeSlider)
    {
        return view('Admin.slider.edit', compact('homeSlider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $homeSlider)
    {
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
        // validaot fails ----------------------------
        $request->validate($rules);
        // dd('heelo');
        // $request->image->move(publi)
        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/images/blogs/'), $fileName);
        $request['regular_price'] = $request->price;
        $UpdatedSliderData = $request->except('_token', 'price', 'image',  '_method');
        // dd($UpdatedSliderData);
        $HomeSlider  =  $homeSlider::updated($UpdatedSliderData);
        notify()->success('home Slider Option Added Sucessfuly'  , 'Success  Messages');
        return redirect()->route('homeSlider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSlider $homeSlider)
    {
        $homeSlider->delete();
        return redirect()->back();
    }
}
