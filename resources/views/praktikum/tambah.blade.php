@extends('layout/ceria')
@section('title', 'Tambah Karyawan')
@section('section_title', 'Tambah Karyawan')
@section('content')
    <div class="col-lg-12">
         <div class="card" style="height: 480px">
            <div class="card-body">
              <!-- Horizontal Form -->
              <form action="/praktikum/store" method="post">
                 {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">NIP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" placeholder="Masukkan NIP" name="NIP" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Masukkan Nama" name="Nama" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Pangkat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" placeholder="Masukkan Pangkat" name="Pangkat" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Gaji</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukkan Gaji dalam Bentuk Angka" id="inputPassword" name="Gaji" required>
                  </div>
                </div>
                <div class="text-left pt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <a href="/praktikum" class="btn btn-light">Cancel</a>
                </div>
              </form><!-- End Horizontal Form -->
          </div>
        </div>
    </div>
@endsection


