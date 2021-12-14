@extends('layout/ceria')
@section('title', 'Data Absen Pegawai')
@section('section_title', 'Data Absen Pegawai')
@section('content')
<div class="col-lg-12">
    <div class="card">

        <div class="card-body">
            <form action="/absen/cari" method="get">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <a href="/absen/tambah" class="btn btn-outline-primary"><i class="bi bi-plus"></i> Tambah Data</a>
                </div>
                  <div class="col-sm-6 d-flex justify-content-end">
                    <input type="text" class="form-control" name="cari" placeholder="Masukkan Keyword Nama Pegawai" value="{{ old('cari') }}">
                    <button type="submit" class="btn btn-secondary ml-2"><i class="bi bi-search"></i></button>
                  </div>
            </div>
            </form>
            <!-- Start Table Pegawai -->
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>

                 @foreach($absen as $abs)
                  <tr>
                    <th scope="col">{{ $loop->iteration }}</th>
                    <td>{{ $abs->pegawai_nama }}</td>
                    <td>{{ $abs->Tanggal }}</td>
                    <td>
                        @if ($abs->Status=== "H")
                           <h5><span class="badge border-primary border-1 text-success">Hadir</span></h5>
                        @else
                           <h5><span class="badge border-primary border-1 text-danger">Tidak Hadir</span></h5>
                        @endif
                    </td>
                    <td>
                        <a href="/absen/detail/{{ $abs->ID }}" class="btn btn-info btn-sm" >Detail</a>
                        <a href="/absen/edit/{{ $abs->ID }}" class="btn btn-warning btn-sm" >Edit</a>
                        <a href="/absen/hapus/{{ $abs->ID }}" class="btn btn-danger btn-sm" >Hapus</a>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
            </table>
            {{$absen->links()}}
              <!-- End Table Pegawai -->
        </div>
     </div>
</div>
@endsection


