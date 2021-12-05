@extends('layout/app')
@section('title', 'Data Pegawai')
@section('section_title', 'Data Pegawai')
@section('content')
<div class="col-lg-12">
    <div class="card">

        <div class="card-body">
            <a href="/pegawai/tambah"><h6 class="card-title">Tambah Data</h6></a>
            <!-- Start Table Pegawai -->
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>

                    <?php $no=1 ?>
                 @foreach($pegawai as $p)
                  <tr>
                    <th scope="col">{{$no++}}</th>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id}}" class="btn btn-warning btn-sm" >Edit</a>
                        <a href="/pegawai/hapus/{{ $p->pegawai_id}}" class="btn btn-danger btn-sm" >Hapus</a>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
            </table>
              <!-- End Table Pegawai -->
        </div>
     </div>
</div>
@endsection


