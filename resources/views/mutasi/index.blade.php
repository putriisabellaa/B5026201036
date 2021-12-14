@extends('layout/ceria')
@section('title', 'Data Mutasi Pegawai')
@section('section_title', 'Data Mutasi Pegawai')
@section('content')
<div class="col-lg-12">
    <div class="card">

        <div class="card-body">
            <form action="/mutasi/cari" method="get">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <a href="/mutasi/tambah" class="btn btn-outline-primary"><i class="bi bi-plus"></i> Tambah Data</a>
                </div>
                  <div class="col-sm-6 d-flex justify-content-end">
                    <input type="text" class="form-control" name="cari" placeholder="Masukkan Keyword Nama/Departemen" value="{{ old('cari') }}">
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
                    <th scope="col">Departemen</th>
                    <th scope="col">Sub Departemen</th>
                    <th scope="col">Mulai Bertugas</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>

                 @foreach($mutasi as $mut)
                  <tr>
                    <th scope="col">{{ $loop->iteration }}</th>
                    <td>{{ $mut->pegawai_nama }}</td>
                    <td>{{ $mut->Departemen }}</td>
                    <td>{{ $mut->SubDepartemen }}</td>
                    <td>{{ $mut->MulaiBertugas }}</td>
                    <td>
                        <a href="/mutasi/detail/{{ $mut->ID}}" class="btn btn-info btn-sm" >Detail</a>
                        <a href="/mutasi/edit/{{ $mut->ID }}" class="btn btn-warning btn-sm" >Edit</a>
                        <a href="/mutasi/hapus/{{ $mut->ID }}" class="btn btn-danger btn-sm" >Hapus</a>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
            </table>
            {{$mutasi->links()}}
              <!-- End Table Pegawai -->
        </div>
     </div>
</div>
@endsection


