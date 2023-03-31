<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tamu.index')->with([
            'tamu' => Tamu::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tamu.create');
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
            'kd_tamu' => 'required',
            'nm_tamu' => 'required', 
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
            'pekerjaan' => 'required',
            'kebangsaan' => 'required',
            'tgl_lahir' => 'required',
            'no_ktp' => 'required',
        ]);
        $existingCode = DB::table('tamu')->where('kd_tamu', $request->kd_tamu)->first();
        $existingCode = DB::table('tamu')->where('no_telp', $request->no_telp)->first();
        $existingCode = DB::table('tamu')->where('no_ktp', $request->no_ktp)->first();
        if($existingCode != null){
            return to_route('tamu.create')->with('error','Data Sudah Terpakai !');
        }

        $tamu = new Tamu;
        $tamu->kd_tamu = $request->kd_tamu;
        $tamu->nm_tamu = $request->nm_tamu;
        $tamu->alamat = $request->alamat;
        $tamu->kota = $request->kota;
        $tamu->no_telp = $request->no_telp;
        $tamu->pekerjaan = $request->pekerjaan;
        $tamu->kebangsaan = $request->kebangsaan;
        $tamu->tgl_lahir = $request->tgl_lahir;
        $tamu->no_ktp = $request->no_ktp;
        $tamu->save();

        return to_route('tamu.index')->with('success','Data Berhasil Ditambahkan.');
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
        return view('tamu.edit')->with([
            'tamu' => Tamu::find($id),
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
            'kd_tamu' => 'required',
            'nm_tamu' => 'required', 
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
            'pekerjaan' => 'required',
            'kebangsaan' => 'required',
            'tgl_lahir' => 'required',
            'no_ktp' => 'required',
        ]);

        $tamu = Tamu::find($id);
        $tamu->kd_tamu = $request->kd_tamu;
        $tamu->nm_tamu = $request->nm_tamu;
        $tamu->alamat = $request->alamat;
        $tamu->kota = $request->kota;
        $tamu->no_telp = $request->no_telp;
        $tamu->pekerjaan = $request->pekerjaan;
        $tamu->kebangsaan = $request->kebangsaan;
        $tamu->tgl_lahir = $request->tgl_lahir;
        $tamu->no_ktp = $request->no_ktp;
        $tamu->save();

        return to_route('tamu.index')->with('success','Data Berhasil Ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tamu = Tamu::find($id);
        $tamu->delete();

        return back()->with('Success','Data Berhasil Di Hapus !.');
    }
}
