@extends('layout/ceria')
@section('title', 'Edit Pegawai')
@section('section_title', 'Edit Pegawai')
@section('content')
<div class="col-lg-12">
            <div class="card-body">
              <!-- Horizontal Form -->
              @foreach($pegawai as $p)
              <form action="/pegawai/update" method="post">
                 {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
                  <div class="col-sm-10">
                    <input type="hidden" value="{{ $p->pegawai_id }}" class="form-control" id="inputText" name="id">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="nama" value="{{ $p->pegawai_nama }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" value="{{ $p->pegawai_jabatan }}" name="jabatan">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="umur" value="{{ $p->pegawai_umur }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputPassword" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                  </div>
                </div>
                <div class="text-left">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <a href="/pegawai" class="btn btn-light">Cancel</a>
                </div>
              </form><!-- End Horizontal Form -->
              @endforeach
          </div>
        </div>
@endsection


