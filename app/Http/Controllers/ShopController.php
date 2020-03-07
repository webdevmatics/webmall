<?php

namespace App\Http\Controllers;

use App\Shop;
use App\User;
use Illuminate\Http\Request;
use App\Mail\ShopActivationRequest;
use Illuminate\Support\Facades\Mail;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add validation
        $request->validate([
            'name' => 'required'
        ]);

        //save db
        $shop = auth()->user()->shop()->create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
        ]);


        //send mail to admin

        $admins = User::whereHas('role', function ($q) {
            $q->where('name', 'admin');
        })->get();

        Mail::to($admins)->send(new ShopActivationRequest($shop));

        return redirect()->route('home')->withMessage('Create shop request sent');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Shop $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        dd($shop->owner->name. ' welcome to your shop named ', $shop->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Shop $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Shop $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Shop $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
