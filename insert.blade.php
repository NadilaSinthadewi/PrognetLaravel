<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Form Biodata Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
<a href="/mahasiswaa" class="btn btn-success">List Biodata</a>
<div class="container mt-4">
    <div class="card">
      <div class="card-header text-center font-weight-bold">
        <h1>Form Biodata Mahasiswa</h1>
      </div>
      <div class="card-body">
        <form name="formBiodata" action="/hasil" method="post" onsubmit="return validateForm()">
        @csrf
          <div class="form-group mb-3">
            <label><strong>NIM :</strong></label>
            <input type="text" name="nim" id="nim" placeholder="NIM" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label><strong>Nama Lengkap :</strong></label>
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label><strong>Nama Panggilan :</strong></label>
            <input type="text" name="nickname" id="nickname" placeholder="Nama Panggilan" class="form-control">
          </div>
          <div>
            <label><strong>Jenis Kelamin :</strong></label>
            <p><input class="mr-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki'>Male</p>
            <p><input class="mr-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan'>Female</p>
          </div>
          <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control">
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
            <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Tanggal Lahir">
          </div>
          <div class="form-group mb-3">
            <label><strong>Hobi :</strong></label>
            <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Hobi">
          </div>
          <div>
            <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
          </div>
        </form>
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
</body>
</html>