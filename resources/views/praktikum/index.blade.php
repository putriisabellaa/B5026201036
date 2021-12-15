@extends('layout/ceria')
@section('title', 'Data Karyawan')
@section('section_title', 'Data Karyawan')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form action="/praktikum/cari" method="get">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <a href="/praktikum/tambah" class="btn btn-outline-primary"><i class="bi bi-plus"></i> Tambah Data</a>
                </div>
                  <div class="col-sm-6 d-flex justify-content-end">
                    <input type="text" class="form-control" name="cari" placeholder="Masukkan Keyword Nama/Pangkat" value="{{ old('cari') }}">
                    <button type="submit" class="btn btn-secondary ml-2"><i class="bi bi-search"></i></button>
                  </div>
            </div>
            </form>
            <!-- Start Table Pegawai -->
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pangkat</th>
                    <th scope="col">Gaji</th>
                    <th scope="col">Opsion</th>
                  </tr>
                </thead>
                <tbody>

                 @foreach($praktikum as $prak)
                  <tr>
                    <th scope="col">{{ $loop->iteration }}</th>
                    <td>{{ $prak->NIP }}</td>
                    <td>{{ $prak->Nama }}</td>
                    <td>{{ $prak->Pangkat }}</td>
                    <td>Rp. {{ number_format($prak->Gaji) }}</td>
                    <td>
                        <a href="/praktikum/detail/{{ $prak->NIP}}" class="btn btn-info btn-sm" >Detail</a>
                        <a href="/praktikum/edit/{{$prak->NIP}}" class="btn btn-warning btn-sm" >Edit</a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus Data ini?')" href="/praktikum/hapus/{{ $prak->NIP}}">Hapus</a>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
            </table>
            {{$praktikum->links()}}
              <!-- End Table Pegawai -->
        </div>
     </div>
</div>
@endsection


