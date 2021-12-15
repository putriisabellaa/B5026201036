@extends('layout/ceria')
@section('title', 'Detail Karyawan')
@section('section_title', 'Detail Karyawan')
@section('content')
<div class="col-lg-12">
    <div class="card"">
        <div class="card-body">
              <!-- Horizontal Form -->
              @foreach($praktikum as $prak)
            <div class="col-xl-8">
              <!-- Bordered Tabs -->
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Nama</div>
                    <div class="col-lg-9 col-md-8">: {{ $prak->NIP }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Jabatan</div>
                    <div class="col-lg-9 col-md-8">: {{ $prak->Nama }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Umur</div>
                    <div class="col-lg-9 col-md-8">: {{ $prak->Pangkat }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Alamat</div>
                    <div class="col-lg-9 col-md-8">: Rp. {{ number_format($prak->Gaji) }}</div>
                  </div>
                  <div class="text-left">
                      <a href="/praktikum" class="btn btn-secondary">Cancel</a>
                  </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
              @endforeach
        </div>
    </div>
</div>
@endsection


