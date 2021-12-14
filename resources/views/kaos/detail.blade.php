@extends('layout/ceria')
@section('title', 'Detail Kaos')
@section('section_title', 'Detail Kaos')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
              <!-- Horizontal Form -->
            @foreach($kaos as $k)
            <div class="col-xl-8">
              <!-- Bordered Tabs -->
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Merk Kaos</div>
                    <div class="col-lg-9 col-md-8">: {{ $k->merkkaos }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Stok Kaos</div>
                    <div class="col-lg-9 col-md-8">: {{ $k->stockkaos }}</div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-4 label" style="color: grey">Tersedia</div>
                    <div class="col-lg-9 col-md-8">
                        @if ($k->tersedia ==="Y")
                            <h5>: <span class="badge bg-success">Ya</span></h5>
                        @else
                            <h5>: <span class="badge bg-danger">Tidak</span></h5>
                        @endif
                    </div>
                  </div>
                  <div class="text-left">
                      <a href="/kaos" class="btn btn-secondary">Cancel</a>
                  </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
              @endforeach
        </div>
    </div>
</div>
@endsection


