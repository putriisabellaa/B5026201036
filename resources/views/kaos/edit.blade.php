@extends('layout/ceria')
@section('title', 'Edit Absen Pegawai')
@section('section_title', 'Edit Absen Pegawai')
@section('content')
    <div class="col-lg-12">
        <div class="card" style="height: 480px">
            <div class="card-body">
              <!-- Horizontal Form -->
             @foreach($kaos as $k)
              <form action="/kaos/update" method="post">
                 {{ csrf_field() }}
                {{-- <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="inputEmail" value="{{ $k->kodekoas }}" name="kodekaos">
                  </div>
                </div> --}}
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="hidden" value="{{ $k->kodekaos }}" class="form-control" id="inputText" name="kodekaos">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Merk Kaos</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" value="{{ $k->merkkaos }}" name="merkkaos">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Stok Kaos</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputEmail" value="{{ $k->stockkaos }}" name="stockkaos">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Tersedia</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="tersedia" id="ya" value="Y" @if ($k->tersedia === "Y") checked="checked" @endif>
                      <label class="form-check-label" for="ya">
                       Ya
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="tersedia" id="tidak" value="T" @if ($k->tersedia === "T") checked="checked" @endif>
                      <label class="form-check-label" for="tidak">
                        Tidak
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="text-left pt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <a href="/absen" class="btn btn-light">Cancel</a>
                </div>
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->

              </form><!-- End Horizontal Form -->
              @endforeach
            </div>
        </div>
    </div>
@endsection


