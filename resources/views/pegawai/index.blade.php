@extends('layout/ceria')
@section('title', 'Data Pegawai')
@section('section_title', 'Data Pegawai')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form action="/pegawai/cari" method="get">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <a href="/pegawai/tambah" class="btn btn-outline-primary"><i class="bi bi-plus"></i> Tambah Data</a>
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
                    <th scope="col">Jabatan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>

                 @foreach($pegawai as $p)
                  <tr>
                    <th scope="col">{{ $loop->iteration }}</th>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>
                        <a href="/pegawai/detail/{{ $p->pegawai_id}}" class="btn btn-info btn-sm" >Detail</a>
                        <a href="/pegawai/edit/{{ $p->pegawai_id}}" class="btn btn-warning btn-sm" >Edit</a>
                        <a href="/pegawai/hapus/{{ $p->pegawai_id}}" class="btn btn-danger btn-sm" >Hapus</a>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
            </table>
            {{$pegawai->links()}}
              <!-- End Table Pegawai -->
        </div>
     </div>
</div>
@endsection


