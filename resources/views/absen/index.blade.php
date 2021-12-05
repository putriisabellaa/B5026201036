@extends('layout/ceria')
@section('title', 'Data Absen Pegawai')
@section('section_title', 'Data Absen Pegawai')
@section('content')
<div class="col-lg-12">
    <div class="card">

        <div class="card-body">
            <a href="/absen/tambah"><h6 class="card-title">Tambah Data</h6></a>
            <!-- Start Table Pegawai -->
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Pegawai</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>

                    <?php $no=1 ?>
                 @foreach($absen as $abs)
                  <tr>
                    <th scope="col">{{$no++}}</th>
                    <td>{{ $abs->IDPegawai }}</td>
                    <td>{{ $abs->pegawai_nama }}</td>
                    <td>{{ $abs->Tanggal }}</td>
                    <td>{{ $abs->Status }}</td>
                    <td>
                        <a href="/absen/edit/{{ $abs->ID }}" class="btn btn-warning btn-sm" >Edit</a>
                        <a href="/absen/hapus/{{ $abs->ID }}" class="btn btn-danger btn-sm" >Hapus</a>
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


