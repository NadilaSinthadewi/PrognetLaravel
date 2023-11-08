<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width device-width, initial-scale 1.0" name="viewport">

  <title>About - Nadila</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.10.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="/">Prognet.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a class="" href="/about">About Me</a></li>
          <li><a href="/mahasiswaa">Tugas Prognet</a></li>
          <li><a class="active" href="/mahasiswaa">List Biodata</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <body style="background-color: skyblue;">
   
<!-- Start Hasil Form -->
<div class="container" data-aos="fade-up">
  <div class="card card-medium mt-5">
    <div class="card-header text-center p-3">
      <h1 class="my-4">List Biodata Mahasiswa</h1>
    </div>
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Jenis Kelamin</th>
            <th>E-mail</th>
            <th>Program Studi</th>
            <th>Tanggal Lahir</th>
            <th>Hobi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <form action="/mahasiswaa/create" method="get">
            <button class="badge bg-success border-0 mb-2" type="submit">Tambah Data Baru</button>
          </form>
          @foreach ($data as $mahasiswaa)
            <tr>
              <td>{{ $mahasiswaa->nim }}</td>
              <td>{{ $mahasiswaa->fullname }}</td>
              <td>{{ $mahasiswaa->nickname }}</td>
              <td>{{ $mahasiswaa->jeniskelamin }}</td>
              <td>{{ $mahasiswaa->email }}</td>
              <td>{{ $mahasiswaa->prodi }}</td>
              <td>{{ $mahasiswaa->tgllahir }}</td>
              <td>{{ $mahasiswaa->hobi }}</td>
              <td>
                <form action="/mahasiswaa/{{ $mahasiswaa->id }}/edit" method="GET">
                  <button class="badge bg-warning border-0">Edit</button>
                </form>
                <form action="/mahasiswaa/{{ $mahasiswaa->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Apa Anda yakin untuk menghapus data ini?')">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- End Hasil Form -->


<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Nadila</a>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>
</body>
</html>