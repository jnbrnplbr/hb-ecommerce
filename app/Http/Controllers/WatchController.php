<?php

namespace App\Http\Controllers;

use App\Watch;
use App\Brand;
use App\Detail;
use App\Price;
use App\Quantity;
use App\Image;
use App\Specification;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $watches = Watch::all();
        $title = 'Model List';
        return view('models.index',compact('title','watches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Model';
        $brands = Brand::all();
        return view('models.create', compact('title','brands'));
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
            'brand' =>  'required',
            'name'  =>  'required',
            'price' =>  'required',
            'quantity'  => 'required',
            'sub'       => 'required',
            'specification' => 'required',
            'image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $brand = Brand::where('name',$request->input('brand'))->first();
        // $detail = Detail::where('name',$request->input('name'))->get('id');
        $detail = Detail::where('name',$request->input('name'))->first();

        if(empty($detail)){
            $detailid = 0;
        }
        else{
            $detailid = $detail->id;
        }

        $watch = Watch::where('detail_id', $detailid)
                        ->where('brand_id',$brand->id)
                        ->get();
        
        if($watch->count() > 0){
            return redirect ('/models/create')->with('error','Duplicate Watch Model');
        }
        else{

            $detail = Detail::create(['name' => $request->input('name')]);
            $price  = Price::create(['amount' => $request->input('price')]);
            $quantity = Quantity::create(['quantity' => $request->input('quantity')]);
            $specification = Specification::create([
                'sub'   =>  $request->input('sub'),
                'detail' => $request->input('specification')]);

            //image uploading
            if($request->has('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();  
                request()->image->move(public_path('uploads'), $imageName);

                $imagePath = '/uploads/'.''.$imageName;

                $image = Image::create(['img' => $imagePath ]);

                if(!$image->wasRecentlyCreated)
                {
                     return redirect('/models/create')->with('error','Image Uploading Error.');
                }
                else
                {
                    
                    $model = new Watch;
                    $model->detail()->associate($detail);
                    $model->price()->associate($price);
                    $model->quantity()->associate($quantity);
                    $model->brand()->associate($brand);
                    $model->specification()->associate($specification);
                    $model->image()->associate($image);
                    $model->save();

                    return redirect('/models')->with('success','Successfully Added New Watch Model');
                }


            }

            
            
        }
        

        // $model = Watch::firstOrCreate([
        //     'name'      =>  $request->input('name'),
        //     'price'     =>  $request->input('price'),
        //     'quantity'  =>  $request->input('quantity'),
        //     'brand_id'  =>  associate($brand)  
        // ]);

        // if($model->wasRecentlyCreated){
        //     return redirect('/models')->with('success','Model Successfully Added');
        // }
        // else{
        //     return redirect('/models')->with('error','Duplicate Model');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function show(Watch $watch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function edit(Watch $watch)
    {
        $brands = Brand::all();
        $title = 'Update Watch Model';
        return view('models.edit',compact('title','watch','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Watch $watch)
    {
        $this->validate($request,[
            'brand' =>  'required',
            'name'  =>  'required',
            'price' =>  'required',
            'quantity'  => 'required'
        ]);

        $brand = Brand::where('name',$request->input('brand'))->first();
        $detail = Detail::where('name',$request->input('name'))->first();
        $price = Price::where('amount',$request->input('price'))->first();

        if(empty($detail)){
            $detailid = 0;
        }
        else{
            $detailid = $detail->id;
        }

        if(empty($price)){
            $priceid = 0;
        }
        else{
            $priceid = $price->id;
        }

        $model = Watch::where('detail_id', $detailid)
                        ->where('brand_id',$brand->id)
                        ->where('price_id', $priceid)
                        ->get();
        
        if($model->count() > 0){
            return redirect('models/'.$watch->id.'/edit')->with('error','Duplicate Watch Model');
        }
        else{
            $detail = Detail::find($watch->detail_id);
            $detail->name = $request->input('name');
            $detail->save();
            
            $price = Price::find($watch->price_id);
            $price->amount = $request->input('price');
            $price->save();

            $quantity = Quantity::find($watch->quantity_id);
            $quantity->quantity = $request->input('quantity');
            $quantity->save();

            $watch->detail()->associate($detail);
            $watch->price()->associate($price);
            $watch->quantity()->associate($quantity);
            $watch->brand()->associate($brand);
            $watch->save();

            return redirect('/models')->with('success','Successfully Added New Watch Model');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Watch  $watch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Watch $watch)
    {
       $watch->delete();
       return redirect('/models')->with('success','Watch Model Deleted Successfully');
    }
}
