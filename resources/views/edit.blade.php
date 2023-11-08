<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Form - Nadila</title>
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
</head>

<body style="background-color: skyblue;">
  <div class="container mt-4">
    <div class="card">
      <div class="card-header text-center font-weight-bold">
        <h1 class="my-4">Form Biodata Mahasiswa</h1>
      </div>
      <div class="card-body">
      <form name="formbio" action="/mahasiswaa/{{ $mahasiswaa->id }}" method="POST" onsubmit="return validateForm()">
      @csrf
      @method('put')
          <div class="form-group mb-3">
            <label><strong>NIM :</strong></label>
            <input type="text" class="form-control" name="nim" value="{{ $mahasiswaa->nim}}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Nama Lengkap :</strong></label>
            <input type="text" class="form-control" name="fullname" value="{{ $mahasiswaa->fullname}}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Nama Panggilan :</strong></label>
            <input type="text" class="form-control" name="nickname" value="{{ $mahasiswaa->nickname}}">
          </div>
          <div>
            <label><strong>Jenis Kelamin :</strong></label>
            <p><input class="mr-1" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki - Laki">Male</p>
            <p><input class="mr-1" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">Female</p>
          </div>
          <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="text" class="form-control" name="email" value="{{ $mahasiswaa->email}}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Program Studi :</strong></label>
            <select name="prodi" id="prodi" class="form-control">
              <option selected>Pilih Program Studi</option>
              <option value="S1 Arsitektur">S1 Arsitektur</option>
              <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
              <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
              <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
              <option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
              <option value="S1 Teknik Industri">S1 Teknik Industri</option>
              <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <label><strong>Tanggal Lahir :</strong></label>
            <input type="date" class="form-control" name="tgllahir" value="{{ $mahasiswaa->tgllahir}}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Hobi :</strong></label>
            <input type="text" class="form-control" name="hobi" value="{{ $mahasiswaa->hobi}}">
          </div>
          <div>
            <form action="send" method="get">
            <button class="badge bg-primary border-0 mb-2" type="send">Send</button>
            </form>

            <form action="/mahasiswaa" method="get">
            <button class="badge bg-success border-0 mb-2" type="submit">List Biodata</button>
            </form>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    function validateForm() {
      // Validasi NIM
      if (document.forms["formBiodata"]["nim"].value == "") {
        alert("Silakan Masukkan NIM Anda!");
        document.forms["formBiodata"]["nim"].focus();
        return false;
      }
      // Validasi Nama Lengkap
      if (document.forms["formBiodata"]["fullname"].value == "") {
        alert("Silakan Masukkan Nama Lengkap Anda!");
        document.forms["formBiodata"]["fullname"].focus();
        return false;
      }
      // Validasi Nama Lengkap
      if (document.forms["formBiodata"]["nickname"].value == "") {
        alert("Silakan Masukkan Nama Panggilan Anda!");
        document.forms["formBiodata"]["nickname"].focus();
        return false;
      }
      // Validasi Jenis Kelamin
      var jeniskelamin = document.getElementsByName('jeniskelamin');
      var genValue = false;
      for (var i = 0; i < jeniskelamin.length; i++) {
        if (jeniskelamin[i].checked == true) {
          genValue = true;
        }
      }
      if (!genValue) {
        alert("Silakan Pilih Jenis Kelamin Anda!");
        return false;
      }
      // Validasi E-mail
      if (document.forms["formBiodata"]["email"].value == "") {
        alert("Silakan Masukkan E-mail Aktif Anda!");
        document.forms["formBiodata"]["email"].focus();
        return false;
      }
      // Validasi Program Studi
      if (document.forms["formBiodata"]["prodi"].selectedIndex < 1) {
        alert("Silakan Pilih Jurusan Anda!");
        document.forms["formBiodata"]["prodi"].focus();
        return false;
      }
      // Validasi Tanggal Lahir
      if (document.forms["formBiodata"]["tgllahir"].value == "") {
        alert("Silakan Masukkan Tanggal Lahir Anda!");
        document.forms["formBiodata"]["tgllahir"].focus();
        return false;
      }
      // Validasi Hobi
      if (document.forms["formBiodata"]["hobi"].value == "") {
        alert("Silakan Masukkan Hobi Anda!");
        document.forms["formBiodata"]["hobi"].focus();
        return false;
      }
    }
  </script>
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
