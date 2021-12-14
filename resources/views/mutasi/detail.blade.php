@extends('layout/ceria')
@section('title', 'Detail Mutasi')
@section('section_title', 'Detail Mutasi')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
              <!-- Horizontal Form -->
              @foreach($mutasi as $mut)
            <div class="col-xl-8">
              <!-- Bordered Tabs -->
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Nama</div>
                    <div class="col-lg-9 col-md-8">: {{ $mut->pegawai_nama }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Departemen</div>
                    <div class="col-lg-9 col-md-8">: {{ $mut->Departemen }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Sub Departemen</div>
                    <div class="col-lg-9 col-md-8">: {{ $mut->SubDepartemen }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Mulai Bertugas</div>
                    <div class="col-lg-9 col-md-8">: {{ $mut->MulaiBertugas }}</div>
                  </div>
                  <div class="text-left">
                      <a href="/mutasi" class="btn btn-secondary">Cancel</a>
                  </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
              @endforeach
        </div>
    </div>
</div>
@endsection


