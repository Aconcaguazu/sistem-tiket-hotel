@extends('layout.dasar')
@section('konten')
    <!-- START FORM -->
    <form action="{{ route('checkin.store') }}" method='POST'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="no_checkin" class="col-sm-2 col-form-label">No Checkin</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_checkin" id="no_checkin">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kd_tamu" class="col-sm-2 col-form-label">Kode Tamu</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="kd_tamu" id="kd_tamu">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kd_kamar" class="col-sm-2 col-form-label">Kode Kamar</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="kd_kamar" id="kd_kamar">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="uang_muka" class="col-sm-2 col-form-label">Uang Muka</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="uang_muka" id="uang_muka">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_keluar" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_keluar" id="tgl_keluar">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="extrabed" class="col-sm-2 col-form-label">ExtraBed</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="extrabed" id="extrabed">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tarif_kamar" class="col-sm-2 col-form-label">Tarif Kamar</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="tarif_kamar" id="tarif_kamar">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
@endsection
