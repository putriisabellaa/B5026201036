<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/logo-border.png')}}" rel="icon">
  <link href="{{asset('sidebar/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('sidebar/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('sidebar/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('sidebar/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('sidebar/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('sidebar/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('sidebar/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('sidebar/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('sidebar/assets/css/style.css')}}" rel="stylesheet">
  <!-- DateTimepicker -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="{{asset('datetimepicker/bootstrap-datetimepicker.min.css')}}">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Putri Dwi Isabella</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('sidebar/assets/img/profile.png')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Putri Dwi Isabella</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <img src="{{asset('sidebar/assets/img/profile.png')}}" alt="Profile" width="200px" height="200px">
            </li>
            <li class="dropdown-header">
              <h6>Putri Dwi Isabella</h6>
              <span>5026201036</span>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/pegawai">
          <i class="bi bi-people-fill"></i>
          <span>Pegawai</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/mutasi">
          <i class="bi bi-arrow-right-square"></i>
          <span>Mutasi</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/absen">
          <i class="bi bi-check-square"></i>
          <span>Absen</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-calendar-event"></i>
          <span>Minggu Depan</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-file-break"></i>
          <span>Praktikum</span>
        </a>
      </li><!-- End Dashboard Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>@yield('section_title')</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
          <!-- start content -->
          @section('content')
          @show

          <!-- end content -->
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
        <h6>
            &copy; Hak Cipta oleh 5026201036 - <strong><span>Putri Dwi Isabella</span></strong>
        </h6>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('sidebar/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('sidebar/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('sidebar/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('sidebar/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('sidebar/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('sidebar/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('sidebar/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('sidebar/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('sidebar/assets/js/main.js')}}"></script>

</body>

</html>
