{{-- @extends('layout/bootstrap')
@section('title', 'Data Absen')
@section('section', 'Data Absen')

@section('isikonten')
<div class="d-grid gap-2 d-md-flex justify-content">
  <a href="/absen/tambah" class="btn btn-primary" type="button">Tambah Data</a>
</div>
<div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID Pegawai</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($absen as $p)
                <tr>
                    <td>{{ $p->IDPegawai }}</td>
                    <td>{{ $p->Tanggal }}</td>
                    <td>{{ $p->Status }}</td>
                    <td>
                        <a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning btn-sm" >Edit</a>
                        <a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger btn-sm" >Hapus</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection

 --}}
@extends('layout/app')
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


