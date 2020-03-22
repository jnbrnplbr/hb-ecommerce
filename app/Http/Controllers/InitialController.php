<?php

namespace App\Http\Controllers;

use App\Initial;
use App\Brand;
use App\User;
use App\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InitialController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function about()
    {
        $brands = Brand::all();
        $title = 'About Us';
        return view('initial.about',compact('brands','title'));
    }



    public function index()
    {
        $brands = Brand::all();
        $title = 'Dashboard';
        return view('pages.index',compact('brands'))->with('title');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Initial  $initial
     * @return \Illuminate\Http\Response
     */
    public function show(Initial $initial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Initial  $initial
     * @return \Illuminate\Http\Response
     */
    public function edit(Initial $initial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Initial  $initial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Initial $initial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Initial  $initial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Initial $initial)
    {
        //
    }
}
