@extends('layout/ceria')
@section('title', 'Detail Absen')
@section('section_title', 'Detail Absen')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
              <!-- Horizontal Form -->
              @foreach($absen as $abs)
            <div class="col-xl-8">
              <!-- Bordered Tabs -->
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label " style="color: grey">Nama</div>
                    <div class="col-lg-9 col-md-8">: {{ $abs->pegawai_nama }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Tanggal</div>
                    <div class="col-lg-9 col-md-8">: {{ $abs->Tanggal }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Status</div>

                    <div class="col-lg-9 col-md-8">
                        @if ($abs->Status=== "H")
                        <h5>: <span class="badge bg-success">Hadir</span></h5>
                        @else
                        <h5>: <span class="badge bg-danger">Tidak Hadir</span></h5>
                        @endif
                    </div>
                  </div>
                  <div class="text-left">
                      <a href="/absen" class="btn btn-secondary">Cancel</a>
                  </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
              @endforeach
        </div>
    </div>
</div>
@endsection


