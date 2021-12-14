@extends('layout/ceria')
@section('title', 'Detail Pegawai')
@section('section_title', 'Detail Pegawai')
@section('content')
<div class="col-lg-12">
    <div class="card"">
        <div class="card-body">
              <!-- Horizontal Form -->
              @foreach($pegawai as $p)
            <div class="col-xl-8">
              <!-- Bordered Tabs -->
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Nama</div>
                    <div class="col-lg-9 col-md-8">: {{ $p->pegawai_nama }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Jabatan</div>
                    <div class="col-lg-9 col-md-8">: {{ $p->pegawai_jabatan }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Umur</div>
                    <div class="col-lg-9 col-md-8">: {{ $p->pegawai_umur }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Alamat</div>
                    <div class="col-lg-9 col-md-8">: {{ $p->pegawai_alamat }}</div>
                  </div>
                  <div class="text-left">
                      <a href="/pegawai" class="btn btn-secondary">Cancel</a>
                  </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
              @endforeach
        </div>
    </div>
</div>
@endsection


