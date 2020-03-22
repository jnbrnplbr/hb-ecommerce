<?php

namespace App\Http\Controllers;
use App\User;
use App\Detail;
use App\Contact;

use Illuminate\Http\Request;

class CustomerController extends Controller
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
        $customer = new Detail;
        $contact = new Contact;
        $user = new User;
        $pending = $user->pendingUser();
        $approve = $user->approveUser();
        $denied = $user->deniedUser();
        $title = 'Customers';

        return view('customers.index', compact('title','pending','approve','user','customer','contact','denied'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve(User $user)
    {
        $appUser = new User;
        $user->update(['status_id' => $appUser->approve()]);
        return redirect('/customers')->with('success','Successfully Approved Customer');
    }

    public function deny(User $user)
    {
        $appUser = new User;
        $user->update(['status_id' => $appUser->denied()]);
        return redirect('/customers')->with('success','Successfully Denied Customer');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/customers')->with('success','Succesfully Deleted Customer');
    }
}
