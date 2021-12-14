@extends('layout/ceria')
@section('title', 'Tambah Pegawai')
@section('section_title', 'Tambah Pegawai')
@section('content')
    <div class="col-lg-12">
         <div class="card" style="height: 480px">
            <div class="card-body">
              <!-- Horizontal Form -->
              <form action="/pegawai/store" method="post">
                 {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pegawai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="nama">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" name="jabatan">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPassword" name="umur">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputPassword" name="alamat"></textarea>
                  </div>
                </div>
                <div class="text-left pt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <a href="/pegawai" class="btn btn-light">Cancel</a>
                </div>
              </form><!-- End Horizontal Form -->
          </div>
        </div>
    </div>
@endsection


