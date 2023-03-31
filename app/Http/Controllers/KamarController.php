<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kamar.index')->with([
            'kamar' => Kamar::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.create');
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
            'kd_kamar' => 'required',
            'nm_kamar' => 'required', 
            'status' => 'required',
            'jml_bed' => 'required',
            'tarif_kamar' => 'required',
        ]);

        $kamar = new Kamar;
        $kamar->kd_kamar = $request->kd_kamar;
        $kamar->nm_kamar = $request->nm_kamar;
        $kamar->status = $request->status;
        $kamar->jml_bed = $request->jml_bed;
        $kamar->tarif_kamar = $request->tarif_kamar;
        $kamar->save();

        return to_route('kamar.index')->with('success','Data Berhasil Ditambahkan.');
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
        return view('kamar.edit')->with([
            'kamar' => Kamar::find($id),
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
            'kd_kamar' => 'required',
            'nm_kamar' => 'required', 
            'status' => 'required',
            'jml_bed' => 'required',
            'tarif_kamar' => 'required',
        ]);

        $kamar = Kamar::find($id);
        $kamar->kd_kamar = $request->input('kd_kamar');
        $kamar->nm_kamar = $request->input('nm_kamar');
        $kamar->status = $request->input('status');
        $kamar->jml_bed = $request->input('jml_bed');
        $kamar->tarif_kamar = $request->input('tarif_kamar');
        $kamar->save();

        return to_route('kamar.index')->with('success','Data Berhasil Di Edit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamar = Kamar::find($id);
        $kamar->delete();

        return back()->with('Success','Data Berhasil Di Hapus !.');
    }

    
}
