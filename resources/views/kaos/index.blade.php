@extends('layout/ceria')
@section('title', 'Data Kaos')
@section('section_title', 'Data Kaos')
@section('content')
<div class="col-lg-12">
    <div class="card">

        <div class="card-body">
            <form action="/kaos/cari" method="get">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <a href="/kaos/tambah" class="btn btn-outline-primary"><i class="bi bi-plus"></i> Tambah Data</a>
                </div>
                  <div class="col-sm-6 d-flex justify-content-end">
                    <input type="text" class="form-control" name="cari" placeholder="Masukkan Keyword Merk Kaos" value="{{ old('cari') }}">
                    <button type="submit" class="btn btn-secondary ml-2"><i class="bi bi-search"></i></button>
                  </div>
            </div>
            </form>
            <!-- Start Table Pegawai -->
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Merk Kaos</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Ketersedian</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>

                 @foreach($kaos as $k)
                  <tr>
                    <th scope="col">{{ $loop->iteration }}</th>
                    <td>{{ $k->merkkaos }}</td>
                    <td>{{ $k->stockkaos }}</td>
                    <td>
                        @if ($k->tersedia === "Y")
                            <h5><span class="badge border-primary border-1 text-success">Ya</span></h5>
                        @else
                           <h5><span class="badge border-primary border-1 text-danger">Tidak</span></h5>
                        @endif
                    </td>
                    <td>
                        <a href="/kaos/detail/{{ $k->kodekaos}}" class="btn btn-info btn-sm" >Detail</a>
                        <a href="/kaos/edit/{{ $k->kodekaos }}" class="btn btn-warning btn-sm" >Edit</a>
                        <a href="/kaos/hapus/{{ $k->kodekaos }}" class="btn btn-danger btn-sm" >Hapus</a>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
            </table>
            {{$kaos->links()}}
              <!-- End Table Pegawai -->
        </div>
     </div>
</div>
@endsection


