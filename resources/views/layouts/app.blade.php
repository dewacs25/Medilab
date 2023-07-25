<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Rujukan</title>
  <meta content="Esir Kota Bogor" name="description">
  <meta content="Esir Kota Bogor" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Medilab') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('Medilab') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Medilab') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('Medilab') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Medilab') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Jun 23 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  {{-- Top Bar --}}

  @include('layouts.topBar')

  <!-- ======= Header ======= -->
  @include('layouts.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>ESIR KOTA BOGOR</h1>
      <h2>Sistem Informasi Rujukan Kota Bogor</h2>
      <a href="#about" class="btn-get-started scrollto">Layanan Pengaduan Kesehatan</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    @yield('content')

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Medilab') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('Medilab') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Medilab') }}/assets/js/main.js"></script>

</body>

</html>