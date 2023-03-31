@extends('layout.dasar')
@section('konten')
    <!-- START FORM -->
    <form action="{{ route('kamar.update', $kamar->id) }}" method='POST'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="kd_kamar" class="col-sm-2 col-form-label">Kode Kamar</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="kd_kamar" value="{{ $kamar->kd_kamar }}" id="kd_kamar">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nm_kamar" class="col-sm-2 col-form-label">Nama Kamar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nm_kamar" value="{{ $kamar->nm_kamar }}" id="nm_kamar">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" value="{{ $kamar->status }}" id="status">
                </div>
            </div>
                <div class="mb-3 row">
                    <label for="jml_bed" class="col-sm-2 col-form-label">Jumlah Bed</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="jml_bed" value="{{ $kamar->jml_bed }}" id="jml_bed">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tarif_kamar" class="col-sm-2 col-form-label">Tarif</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="tarif_kamar" value="{{ $kamar->tarif_kamar }}" id="tarif_kamar">
                    </div>
                </div>

                    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
          </form>
        </div>
        <!-- AKHIR FORM -->
@endsection
