@extends('layout.dasar')
@section('konten')
        
<!-- FORM PENCARIAN -->
<div class="pb-3">
    <form class="d-flex" action="" method="get">
        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Cari</button>
    </form>
  </div>

<!-- TOMBOL Kembali Ke Dashboard -->
<div class="pb-3">
    <a href="{{ route('dashboard') }}" class="btn btn-info"><- Kembali</a>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
  </div>
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                    <a href="{{ route('checkin.create') }}" class="btn btn-primary">+ Tambah Data</a>
                  </div>
            
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th class="col-md-1">No</th>
                              <th class="col-md-3">No Checkin</th>
                              <th class="col-md-2">Kode Tamu</th>
                              <th class="col-md-2">Kode Kamar</th>
                              <th class="col-md-3">Tanggal Masuk</th>
                              <th class="col-md-3">Uang Muka</th>
                              <th class="col-md-3">Tanggal Keluar</th>
                              <th class="col-md-2">Extra Bed</th>
                              <th class="col-md-2">Tarif Kamar</th>
                              <th class="col-md-2">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($checkin as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil->no_checkin }}</td>
                            <td>{{ $hasil->kd_tamu }}</td>
                            <td>{{ $hasil->kd_kamar }}</td>
                            <td>{{ $hasil->tgl_masuk }}</td>
                            <td>{{ $hasil->uang_muka }}</td>
                            <td>{{ $hasil->tgl_keluar }}</td>
                            <td>{{ $hasil->extrabed }}</td>
                            <td>{{ $hasil->tarif_kamar }}</td>
                            <td>
                                <form action="{{ route('checkin.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('checkin.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                 
            </div>
            <!-- AKHIR DATA -->
      
  @endsection      
  