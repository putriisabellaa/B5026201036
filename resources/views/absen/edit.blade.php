@extends('layout/ceria')
@section('title', 'Edit Absen Pegawai')
@section('section_title', 'Edit Absen Pegawai')
@section('content')
    <div class="col-lg-12">
            <div class="card-body">
              <!-- Horizontal Form -->
             @foreach($absen as $p)
              <form action="/absen/update" method="post">
                 {{ csrf_field() }}
                 {{-- <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" {{ $p->ID }} name="id">
                  </div>
                </div> --}}
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="inputEmail" value="{{ $p->ID }}" name="id">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="IDPegawai" class="col-sm-2 col-form-label">Pegawai</label>
                  <div class="col-sm-10">
                    <select id="IDPegawai" name="IDPegawai" required="required" class="form-select">
                    @foreach($pegawai as $peg)
                    <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                    @endforeach
                </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="datetimepicker" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="input-group date col-sm-10" id="datetimepicker">
                    <input type='text' class="form-control" name="tanggal" value="{{ $p->Tanggal }}">
                    <div class="input-group-addon input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                   </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status" id="hadir" value="H" @if ($p->Status === "H") checked="checked" @endif>
                      <label class="form-check-label" for="hadir">
                       Hadir
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status" id="tidak" value="T" @if ($p->Status === "T") checked="checked" @endif>
                      <label class="form-check-label" for="tidak">
                        Tidak Hadir
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="text-left">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <a href="/absen" class="btn btn-light">Cancel</a>
                </div>
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->

              </form><!-- End Horizontal Form -->
              @endforeach
            </div>
           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
                <script src="{{asset('datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
                <script>
                    $(function () {
                        $.extend(true, $.fn.datetimepicker.defaults, {
                            icons: {
                                time: 'far fa-clock',
                                date: 'far fa-calendar',
                                up: 'fas fa-arrow-up',
                                down: 'fas fa-arrow-down',
                                previous: 'fas fa-chevron-left',
                                next: 'fas fa-chevron-right',
                                today: 'far fa-calendar-check-o',
                                clear: 'far fa-trash',
                                close: 'far fa-times'
                            }
                        });
                    });
                </script>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                    });
                </script>
        </div>
@endsection


