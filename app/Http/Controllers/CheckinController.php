<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkin.index')->with([
            'checkin' => Checkin::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checkin.create');
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
            'no_checkin' => 'required',
            'kd_tamu' => 'required',
            'kd_kamar' => 'required',
            'tgl_masuk' => 'required',
            'uang_muka' => 'required',
            'tgl_keluar' => 'required',
            'extrabed' => 'required',
            'tarif_kamar' => 'required',
        ]);

        $checkin = new Checkin;
        $checkin->no_checkin = $request->no_checkin;
        $checkin->kd_tamu = $request->kd_tamu;
        $checkin->kd_kamar = $request->kd_kamar;
        $checkin->tgl_masuk = $request->tgl_masuk;
        $checkin->uang_muka = $request->uang_muka;
        $checkin->tgl_keluar = $request->tgl_keluar;
        $checkin->extrabed = $request->extrabed;
        $checkin->tarif_kamar = $request->tarif_kamar;
        $checkin->save();

        return to_route('checkin.index')->with('success','Data Berhasil Ditambahkan.');
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
        return view('checkin.edit')->with([
            'checkin' => Checkin::find($id),
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
            'no_checkin' => 'required',
            'kd_tamu' => 'required',
            'kd_kamar' => 'required',
            'tgl_masuk' => 'required',
            'uang_muka' => 'required',
            'tgl_keluar' => 'required',
            'extrabed' => 'required',
            'tarif_kamar' => 'required',
        ]);

        $checkin = Checkin::find($id);
        $checkin->no_checkin = $request->no_checkin;
        $checkin->kd_tamu = $request->kd_tamu;
        $checkin->kd_kamar = $request->kd_kamar;
        $checkin->tgl_masuk = $request->tgl_masuk;
        $checkin->uang_muka = $request->uang_muka;
        $checkin->tgl_keluar = $request->tgl_keluar;
        $checkin->extrabed = $request->extrabed;
        $checkin->tarif_kamar = $request->tarif_kamar;
        $checkin->save();

        return to_route('checkin.index')->with('success','Data Berhasil Ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkin = Checkin::find($id);
        $checkin->delete();

        return back()->with('Success','Data Berhasil Di Hapus !.');
    }
}
