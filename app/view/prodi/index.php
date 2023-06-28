<?php
include 'function/proses-index.php';

// session_start();
// if (!isset($_SESSION['admin'])) {
//   header('location: ../../../login.php');
// }
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

  <!-- =======================================================
  * Template Name: Knight
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="index.php" class="hero-logo" data-aos="zoom-in"><img src="../../../assets/img/itsk-logo.png" alt="ITSK-LOGO" width="250" height="250" /></a>
      <h1 data-aos="zoom-in">Selamat datang Admin, <br> di sistem penjadwalan ruang perkuliahan kampus 1 <br> ITSK RS dr. Soepraoen</h1>
      <!-- <h1 data-aos="zoom-in" style="margin-top: -15px;">ITSK RS dr. Soepraoen</h1> -->
      <h2 data-aos="fade-up" data-aos-delay="200" style="margin-top: -15px;">BADAN ADMINISTRASI UMUM KAMPUS 1</h2>

    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="box-shadow: 0 4px 17px hsla(0, 0%, 0%, 0.507);">
    <div class="container d-flex align-items-center justify-content-between">
      <div>
        <a href="index.php"><img src="../../../assets/img/itsk-logo.png" width="75" height="75" alt="" class="img-fluid" /></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#home">Home</a></li>
          <li><a class="nav-link scrollto" href="dataPerkuliahan.php">Data Perkuliahan</a></li>
          <li><a class="nav-link scrollto" href="insert.php">Tambahkan Data</a></li>
          <li><a class="nav-link scrollto" href="#informasi">Informasi</a></li>
          <li><button class="btn-logout"><a href="proses-logout.php">Logout</a></button></li>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Table Section ======= -->

    <!-- 03/04/23 INSERT DATA (MANUAL/KONFIRMASI) -->


    <section id="home">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Jadwal ruangan perkuliahan</h2>
          <?php foreach ($result1 as $rest) : ?>
            <h5 style="margin-top: -10px;">TAHUN AJARAN <?= $rest['t_awal'] ?> - <?= $rest['t_akhir'] ?></h5>
          <?php endforeach ?>
          <p><?php echo date('l, j M Y'); ?></p>
        </div>

        <table class="table table-striped table-dark table-responsive" data-aos="fade" style="margin-top:-20px;">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Prodi</th>
              <th scope="col">Tingkat</th>
              <th scope="col">Kelas</th>
              <th scope="col">Mata Kuliah</th>
              <th scope="col">Sesi perkuliahan ke-</th>
              <th scope="col">Pukul (WIB)</th>
              <th scope="col">Dosen Pengajar</th>
              <th scope="col">Ruangan</th>
            </tr>
          </thead>

          <?php $i = 1;
          foreach ($result2 as $rows) : ?>
            <tbody>
              <tr>
                <th scope='row'><?= $i++ ?></th>
                <td><?= $rows['nama_prodi'] ?></td>
                <td><?= $rows['tingkat'] ?></td>
                <td><?= $rows['kelas'] ?></td>
                <td><?= $rows['nama_matkul'] ?> </td>
                <td><?= $rows['sesi'] ?></td>
                <td><?= $rows['waktu'] ?></td>
                <td><?= $rows['nama_dosen'] ?></td>
                <td><?= $rows['ruangan'] ?></td>
              </tr>
            </tbody>
          <?php endforeach ?>
        </table>
      </div>
    </section>


    <!-- ======= Edit ======= -->
    <!-- <section id="edit">
        <div class="container">
            <div class="section-title" >
                <h2>Edit data</h2>
            </div>

            <table class="table table-striped border table-responsive" data-aos="fade" style="margin-top:-20px;">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Prodi</th>
              <th scope="col">Tingkat</th>
              <th scope="col">Kelas</th>
              <th scope="col">Mata Kuliah</th>
              <th scope="col">Sesi perkuliahan ke-</th>
              <th scope="col">Pukul</th>
              <th scope="col">Ruangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td><a href="">Edit</a> | <a href="">Hapus</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
            
        </div>
     </section> -->


  </main>

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

  <!-- Template Main SweeAlert -->
  <link href="../../../assets/sweetalert/sweetalert2.min.css" rel="stylesheet" />
  <link href="../../../assets/sweetalert/animate.min.css" rel="stylesheet" />

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