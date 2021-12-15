@extends('layout/ceria')
@section('title', 'Edit Karyawan')
@section('section_title', 'Edit Karyawan')
@section('content')
    <div class="col-lg-12">
         <div class="card" style="height: 480px">
            <div class="card-body">
              <!-- Horizontal Form -->
              @foreach($praktikum as $prak)
              <form action="/praktikum/update" method="post">
                 {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">NIP</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $prak->NIP }}" class="form-control" id="inputText" name="NIP">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pegawai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="Nama" value="{{ $prak->Nama }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Pangkat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" value="{{ $prak->Pangkat }}" name="Pangkat">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Gaji</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="Gaji" value="{{ $prak->Gaji }}">
                  </div>
                </div>
                <div class="text-left pt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/praktikum" class="btn btn-secondary">Cancel</a>
                </div>
              </form><!-- End Horizontal Form -->
              @endforeach
            </div>
        </div>
     </div>
@endsection


