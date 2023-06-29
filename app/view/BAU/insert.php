<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('location: ../../../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>SISTEM PENJADWALAN RUANG PERKULIAHAN KAMPUS 1 | ITSK RS DR. SOEPRAOEN</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="../../../assets/img/itsk-logo.png" rel="icon" />
  <link href="../../../assets/img/itsk-logo.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="../../../assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="../../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="../../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="../../../assets/css/style2.css" rel="stylesheet" />
  <link href="../../../assets/sweetalert/sweetalert2.min.css" rel="stylesheet" />
  <link href="../../../assets/css/style2.css" rel="stylesheet" />


  <!-- Template Main SweeAlert -->
  <link href="../../../assets/sweetalert/sweetalert2.min.css" rel="stylesheet" />
  <link href="../../../assets/sweetalert/animate.min.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Knight
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body style="background: url(../PROYEK-KAMPUS-1/../../../assets/img/hero-bg.png)" ;>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="box-shadow: 0 4px 17px hsla(0, 0%, 0%, 0.507);">
    <div class="container d-flex align-items-center justify-content-between">
      <div>
        <a href="index.php"><img src="../../../assets/img/itsk-logo.png" width="75" height="75" alt="" class="img-fluid" /></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#home">Home</a></li>
          <li><a class="nav-link scrollto" href="dataPerkuliahan.php#edit">Data Perkuliahan</a></li>
          <li class="dropdown">
            <a href="#"><span>Data Prodi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="confirm.php">Konfirmasi</a></li>
              <li><a href="insert.php">Tambahkan data</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown">
                <a href="#admin"><span>Edit Admin</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="admin/update-adminbau.php#admin">Admin BAU</a></li>
                  <li><a href="admin/update-adminprodi.php#admin"">Admin Prodi</a></li>
                </ul>
              </li>
              <li><a href=" admin/insert-admin.php#admin">Tambahkan admin</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#informasi">Informasi</a></li>
              <li><button class="btn-logout" onclick="confirm('apakah anda ingin keluar dari halaman?')"><a href="proses-logout.php">Logout</a></button></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Insert ======= -->
  <section id="insert">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2 style="color: #fff;">Insert data</h2>
      </div>
      <div class="insert-form" data-aos="fade-up">
        <form action="function/proses-insert.php" method="post">
          <div class="mb-3">
            <label for="prodi" class="form-label" data-aos="fade-right">Prodi</label>
            <select type="text" class="form-select" id="prodi" name="col_prodi" data-aos="fade-left" placeholder="Silahkan masukkan nama prodi" required>
              <option value="S1 Informatika">S1 Informatika</option>
              <option value="S1 Keperawatan">S1 Keperawatan</option>
              <option value="S1 Farmasi">S1 Farmasi</option>
              <option value="S1 Kebidanan">S1 Kebidanan</option>
              <option value="S1 Anastesi">S1 Anastesi</option>
              <option value="D3 Keperawatan">D3 Keperawatan</option>
              <option value="D3 Farmasi">D3 Farmasi</option>
              <option value="D3 RMIK">D3 RMIK</option>
              <option value="D3 Kebidanan">D3 Kebidanan</option>
              <option value="D3 Akupuntur">D3 Akupuntur</option>
              <option value="Sarjana Terapan Kebidanan">Sarjana Terapan Kebidanan</option>
              <option value="Sarjana Terapan Anastesi">Sarjana Terapan Anastesi</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="tingkat" class="form-label" data-aos="fade-right">Tingkat</label>
            <select type="number" class="form-select" id="tingkat" name="col_tingkat" data-aos="fade-left" placeholder="Silahkan masukkan semester kelas" required>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="kelas" class="form-label" data-aos="fade-right">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="col_kelas" data-aos="fade-left" placeholder="Silahkan masukkan kelas prodi" required>
            <div id="emailHelp" class="form-text" data-aos="fade">format kode kelas, contoh : 1B</div>
          </div>
          <div class="mb-3">
            <label for="matkul" class="form-label" data-aos="fade-right">Mata kuliah</label>
            <input type="text" class="form-control" id="matkul" name="col_matkul" data-aos="fade-left" placeholder="Silahkan masukkan mata kuliah" required>
          </div>
          <div class="mb-3">
            <label for="sesi" class="form-label" data-aos="fade-right">Sesi perkuliahan ke-</label>
            <select type="number" class="form-select" id="sesi" name="col_sesi" data-aos="fade-left" placeholder="Silahkan masukkan jam perkuliahan" required>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="waktu" class="form-label" data-aos="fade-right">jam</label>
            <select type="number" class="form-select" id="waktu" name="col_waktu" data-aos="fade-left" placeholder="Silahkan masukkan jam perkuliahan" required>
              <option disabled>jeda sesi 50 menit</option>
              <option value="07:00 - 07:50">07:00 - 07:50 </option>
              <option value="07:50 - 08:40">07:50 - 08:40 </option>
              <option value="08:40 - 09:30">08:40 - 09:30 </option>
              <option value="09:30 - 10:20">09:30 - 10:20 </option>
              <option value="10:20 - 11:10">10:20 - 11:10 </option>
              <option value="11:10 - 12:00">11:10 - 12:00</option>
              <option value="11:10 - 12:00">11:10 - 12:00</option>
              <option value="13:00 - 13:50">13:00 - 13:50</option>
              <option value="13:50 - 14:40">13:50 - 14:40</option>
              <option value="14:40 - 15:30">14:40 - 15:30</option>
              <option value="15:30 - 16:20">15:30 - 16:20</option>
              <option value="16:20 - 17:10">16:20 - 17:10</option>
              <option value="17:10 - 18:00">17:10 - 18:00 </option>
              <option value="19:00 - 19:50">19:00 - 19:50</option>
              <option value="19:50 - 20:40">19:50 - 20:40</option>
              <option disabled>jeda sesi 100 menit</option>
              <option value="07:00 - 08:40">07:00 - 08:40 </option>
              <option value="08:40 - 10:20">08:40 - 10:20</option>
              <option value="10:20 - 12:00">10:20 - 12:00</option>
              <option value="13:00 - 14:40">13:00 - 14:40</option>
              <option value="14:40 - 16:20">14:40 - 16:20</option>
              <option value="16:20 - 18:00">16:20 - 18:00</option>
              <option value="19:00 - 20:40">19:00 - 20:40</option>
            </select>
            <div id="emailHelp" class="form-text" data-aos="fade">contoh : 07.00 - 09.00</div>
          </div>
          <div class="mb-3">
            <label for="dosen" class="form-label" data-aos="fade-right">Dosen Pengajar</label>
            <input type="text" class="form-control" id="dosen" name="col_dosen" data-aos="fade-left" placeholder="Silahkan masukkan dosen pengajar" required>
          </div>
          <div class="mb-3">
            <div class="mb-3">
              <label for="ruangan" class="form-label" data-aos="fade-right">Ruangan</label>
              <select type="number" class="form-select" id="ruangan" name="col_ruangan" data-aos="fade-left" placeholder="Silahkan masukkan pukul perkuliahan" required>
                <option value="Ruangan 1">Ruangan 1 </option>
                <option value="Ruangan 2">Ruangan 2 </option>
                <option value="Ruangan 3">Ruangan 3 </option>
                <option value="Ruangan 4">Ruangan 4 </option>
                <option value="Ruangan 5">Ruangan 5 </option>
                <option value="Ruangan 6">Ruangan 6</option>
                <option value="Ruangan 7">Ruangan 7</option>
                <option value="Ruangan 8">Ruangan 8</option>
                <option value="Ruangan 9">Ruangan 9</option>
                <option value="Ruangan 10">Ruangan 10</option>
                <option value="Ruangan 11">Ruangan 11</option>
                <option value="Ruangan 17">Ruangan 17</option>
                <option value="Ruangan 18">Ruangan 18 </option>
                <option value="Aula Kampus 2">Aula Kampus 2</option>
              </select>
            </div>
            <button type="submit" name="submit" class="btn-submit" data-aos="fade-up">Tambah</button>
        </form>
      </div>
    </div>
    </div>
  </section>
  <!-- End Insert -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="box-shadow: 0 0 17px 4px hsla(0, 0%, 0%, 0.507);">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header"><img src="../../../assets/img/itsk-logo.png" alt="" height="125" width="125" /></a>
            <h3>ITSK RS DR. SOEPRAOEN</h3>
            <p> <a href="https://www.google.com/maps/place/Campus+2+ITSK+RS+dr.+Soepraoen/@-7.9898472,112.6160709,15.96z/data=!4m15!1m8!3m7!1s0x2e78834c14720de5:0x5734a0a408cc3885!2sJl.+S.+Supriyadi+Gg.+IIa+No.22,+Sukun,+Kec.+Sukun,+Kota+Malang,+Jawa+Timur+65147!3b1!8m2!3d-7.9928588!4d112.6196869!16s%2Fg%2F11fj5ldthc!3m5!1s0x2dd6281d6d2d9ecf:0x30e491887b18d4f0!8m2!3d-7.9869736!4d112.6196197!16s%2Fg%2F11bz_3yq9y">Jln. S. Supriadi No. 22, Sukun, Kecamatan Sukun, Kota Malang, Jawa Timur <br> Kode Pos: 65147</a></p>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>ITSK RS Dr. Soepraoen</span></strong> | Badan Administrasi Umum
      </div>
      <div class="credits">
        Designed by <a href="https://programmermedical.github.io/">Zainal Saputra</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../../assets/vendor/aos/aos.js"></script>
  <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../../assets/js/main.js"></script>

  <!-- Template Sweet Alert JS File -->
  <script src="../../../assets/sweetalert/sweetalert2.min.js"></script>

  <?php if (isset($_GET["berhasil"])) : ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: 'Data anda telah dimasukkan!!',
        iconColor: '#bafb08',
        confirmButtonColor: '#583fff',
        confirmButtonText: '&nbsp; OK &nbsp; '
      });
    </script>
  <?php endif ?>
  <?php if (isset($_GET["gagal"])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!!',
        text: 'Ada kesalahan dalam penginputan data!!',
        confirmButtonColor: '#583fff',
        confirmButtonText: '&nbsp; OK &nbsp'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php endif ?>
</body>

</html>