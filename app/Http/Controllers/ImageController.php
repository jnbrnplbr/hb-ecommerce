<?php

namespace App\Http\Controllers;

use App\Image;
use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        $images = Image::all();
        $title = 'Product Images';
        return view('images.index',compact('images','title','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $brands = Brand::all();
        $title = 'Upload Images';
        return view('images.create',compact('title','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);


        if($request->has('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();  
            request()->image->move(public_path('uploads'), $imageName);

            $imagePath = '/uploads/'.''.$imageName;

            $image = Image::create(['img' => $imagePath ]);

            if(!$image->wasRecentlyCreated){
                return redirect('/product-iamges/create')->with('error','Error Occur while uploading. Please Retry again.');
            }
            else{
                return redirect('/product-images/create')->with('success','Successfully Added');
            }

        }




        // if($request->has('image')){
        //     $image = $request->file('image');
        //     $name = Str::slug('product_model').'_'.time();

        //     $imgName = $name.'.'.$image->getClientOriginalExtension();
        //     $folder = '/uploads/';
        //     $filepath = $folder.''.$imgName;
        //     request()->image->move(public_path('uploads'), $imgName);

        //     $prdIMG = new Image;
        //     $newPath = $prdIMG->uploadOne($image,$folder,'public',$imgName);

        //     $prdIMG->img = $newPath;
        //     $prdIMG->save();

        //     
        // }





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
