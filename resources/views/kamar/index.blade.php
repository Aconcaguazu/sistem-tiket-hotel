@extends('layout.dasar')
@section('konten')
        
<!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">

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
                    <a href="{{ route('kamar.create') }}" class="btn btn-primary">+ Tambah Data</a>
                  </div>
            
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th class="col-md-1">No</th>
                              <th class="col-md-3">Kode Kamar</th>
                              <th class="col-md-4">Nama Kamar</th>
                              <th class="col-md-2">Status</th>
                              <th class="col-md-2">Jumlah bed</th>
                              <th class="col-md-2">Tarif</th>
                              <th class="col-md-2">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($kamar as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil->kd_kamar }}</td>
                            <td>{{ $hasil->nm_kamar }}</td>
                            <td>{{ $hasil->status }}</td>
                            <td>{{ $hasil->jml_bed }}</td>
                            <td>{{ $hasil->tarif_kamar }}</td>
                            <td>
                                <form action="{{ route('kamar.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('kamar.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
  