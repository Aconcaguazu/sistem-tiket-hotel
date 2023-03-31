@extends('layout.dasar')
@section('konten')
    <!-- START FORM -->
    <form action="{{ route('checkout.store') }}" method='POST'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="no_checkout" class="col-sm-2 col-form-label">No Checkout</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_checkout" id="no_checkout">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kd_tamu" class="col-sm-2 col-form-label">Kode Tamu</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="kd_tamu" id="kd_tamu">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_checkin" class="col-sm-2 col-form-label">No Checkin</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_checkin" id="no_checkin">
                </div>
            </div>
                <div class="mb-3 row">
                    <label for="biaya_inap" class="col-sm-2 col-form-label">Biaya Inap</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="biaya_inap" id="biaya_inap">
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
