<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout.index')->with([
            'checkout' => Checkout::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checkout.create');
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
            'no_checkout' => 'required',
            'kd_tamu' => 'required',
            'no_checkin' => 'required',
            'biaya_inap' => 'required',
        ]);

        $checkout = new Checkout;
        $checkout->no_checkout = $request->no_checkout;
        $checkout->kd_tamu = $request->kd_tamu;
        $checkout->no_checkin = $request->no_checkin;
        $checkout->biaya_inap = $request->biaya_inap;
        $checkout->save();

        return to_route('checkout.index')->with('success','Data Berhasil Ditambahkan.');
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
        return view('checkout.edit')->with([
            'checkout' => Checkout::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_checkout' => 'required',
            'kd_tamu' => 'required',
            'no_checkin' => 'required',
            'biaya_inap' => 'required',
        ]);

        $checkout = Checkout::find($id);
        $checkout->no_checkout = $request->no_checkout;
        $checkout->kd_tamu = $request->kd_tamu;
        $checkout->no_checkin = $request->no_checkin;
        $checkout->biaya_inap = $request->biaya_inap;
        $checkout->save();

        return to_route('checkout.index')->with('success','Data Berhasil Ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkout = Checkout::find($id);
        $checkout->delete();

        return back()->with('Success','Data Berhasil Di Hapus !.');
    }
}
