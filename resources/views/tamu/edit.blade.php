@extends('layout.dasar')
@section('konten')
    <!-- START FORM -->
    <form action="{{ route('tamu.update', $tamu->id) }}" method='POST'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="kd_tamu" class="col-sm-2 col-form-label">Kode Tamu</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="kd_tamu" value="{{ $tamu->kd_tamu }}" id="kd_tamu">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nm_tamu" class="col-sm-2 col-form-label">Nama Tamu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nm_tamu" value="{{ $tamu->nm_tamu }}" id="nm_tamu">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="{{ $tamu->alamat }}" id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kota" value="{{ $tamu->kota }}" id="kota">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_telp" value="{{ $tamu->no_telp }}" id="no_telp">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="pekerjaan" value="{{ $tamu->pekerjaan }}" id="pekerjaan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kebangsaan" class="col-sm-2 col-form-label">Kebangsaan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kebangsaan" value="{{ $tamu->kebangsaan }}" id="kebangsaan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_lahir" value="{{ $tamu->tgl_lahir }}" id="tgl_lahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_ktp" class="col-sm-2 col-form-label">No KTP</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_ktp" value="{{ $tamu->no_ktp }}" id="no_ktp">
                </div>
            </div>

           <button type="submit" class="btn btn-primary fload-end" name="submit">SIMPAN</button>
          </form>
        </div>
        <!-- AKHIR FORM -->
@endsection
