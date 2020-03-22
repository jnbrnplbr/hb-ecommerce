<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        $title = 'Brands';
        return view('brands.index', compact('brands','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Brand';
        return view('brands.create')->with('title');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'brand' => 'required'
        ]);
        
        $brand = Brand::firstOrCreate(['name' => $request->input('brand')]);
        
        if(!$brand->wasRecentlyCreated){
            return redirect('/brands/create')->with('error','Duplicate Data');
        }
        else{
            return redirect('/brands')->with('success','Successfully Added');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $title = 'Update Brand';
        return view('brands.edit',compact('brand','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request,[
            'brand' => 'required'
        ]);

        if(Brand::where('name',$request->input('brand'))->first()){
            return redirect('/brands/'.$brand->id.'/edit')->with('error', 'Duplicate Data');
        }
        else{
            $build = Brand::find($brand)->first();
            $build->name = $request->input('brand');
            $build->save();
            return redirect('/brands')->with('success','Successfully Updated');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect('/brands')->with('success','Successfully Deleted');
    }
}
