@extends('layout/ceria')
@section('title', 'Tambah Absen Pegawai')
@section('section_title', 'Tambah Absen Pegawai')
@section('content')
    <div class="col-lg-12">
         <div class="card" style="height: 480px">
            <div class="card-body">
              <!-- Horizontal Form -->
              <form action="/kaos/store" method="post">
                 {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Merk Kaos</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" name="merkkaos">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Stok Kaos</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputEmail" name="stockkaos">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Tersedia</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="tersedia" id="gridRadios1" value="Y" checked>
                      <label class="form-check-label" for="gridRadios1">
                       Ya
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="tersedia" id="gridRadios2" value="T">
                      <label class="form-check-label" for="gridRadios2">
                        Tidak
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="text-left pt-sm-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <a href="/absen" class="btn btn-light">Cancel</a>
                </div>
              </form>
            </div>
         </div>
    </div>
@endsection


