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
                    <a href="{{ route('tamu.create') }}" class="btn btn-primary">+ Tambah Data</a>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                  </div>
            
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th class="col-md-1">No</th>
                              <th class="col-md-3">Kode Tamu</th>
                              <th class="col-md-4">Nama Tamu</th>
                              <th class="col-md-2">Alamat</th>
                              <th class="col-md-2">Kota</th>
                              <th class="col-md-2">No Telp</th>
                              <th class="col-md-2">Pekerjaan</th>
                              <th class="col-md-2">Kebangsaan</th>
                              <th class="col-md-2">Tanggal Lahir</th>
                              <th class="col-md-2">No KTP</th>
                              <th class="col-md-2">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($tamu as $no => $hasil)
                        <tr>
                          <th>{{ $no+1 }}</th>
                          <td>{{ $hasil->kd_tamu }}</td>
                          <td>{{ $hasil->nm_tamu }}</td>
                          <td>{{ $hasil->alamat }}</td>
                          <td>{{ $hasil->kota }}</td>
                          <td>{{ $hasil->no_telp }}</td>
                          <td>{{ $hasil->pekerjaan }}</td>
                          <td>{{ $hasil->kebangsaan }}</td>
                          <td>{{ $hasil->tgl_lahir }}</td>
                          <td>{{ $hasil->no_ktp }}</td>
                          <td>
                            <form action="{{ route('tamu.destroy', $hasil->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{ route('tamu.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
  