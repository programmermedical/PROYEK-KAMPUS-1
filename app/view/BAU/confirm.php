<?php
require_once '../../controller/ReadData.php';

$readData = new ReadData();
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
            <a href="#konfirmasi"><span>Data Prodi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="confirm.php#konfirmasi">Konfirmasi</a></li>
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
  <!-- ======= Update ======= -->
  <section id="konfirmasi">
    <div class="container">
      <div class="section-title">
        <h2 style="color: #fff;" data-aos="fade-up" data-aos-delay="200">Konfirmasi data jadwal perkuliahan</h2>
        <!-- <p style="margin-top: -10px;">Edit data ruangan perkuliahan</p> -->
      </div>


      <div class="table-prodi">
        <h4 style="margin: -22px auto 25px 0;" data-aos="fade-left" data-aos-delay="200">&nbsp;1. S1 Informatika</h4>
        <table class="table1" data-aos="fade-left" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Dosen Pengajar</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('S1 Informatika');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>

        <h4 data-aos="fade-right" data-aos-delay="200">&nbsp;2. S1 Farmasi</h4>
        <table class="table1" data-aos="fade-right" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Ruangan</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('S1 Farmasi');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>

      <div class="table-prodi" style="margin-top: 52px;">
        <h4 style="margin: -22px auto 25px 0;" data-aos="fade-left" data-aos-delay="200">&nbsp;3. S1 Keperawatan</h4>
        <table class="table1" data-aos="fade-left" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Dosen Pengajar</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('S1 Keperawatan');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>

        <h4 data-aos="fade-right" data-aos-delay="200">&nbsp;4. S1 Anastesi</h4>
        <table class="table1" data-aos="fade-right" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Ruangan</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('S1 Anastesi');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>

      <div class="table-prodi" style="margin-top: 52px;">
        <h4 style="margin: -22px auto 25px 0;" data-aos="fade-left" data-aos-delay="200">&nbsp;5. S1 Kebidanan</h4>
        <table class="table1" data-aos="fade-left" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Dosen Pengajar</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('S1 Kebidanan');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>

        <h4 data-aos="fade-right" data-aos-delay="200">&nbsp;6. D3 Keperawatan</h4>
        <table class="table1" data-aos="fade-right" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Ruangan</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('D3 Keperawatan');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>

      <div class="table-prodi" style="margin-top: 52px;">
        <h4 style="margin: -22px auto 25px 0;" data-aos="fade-left" data-aos-delay="200">&nbsp;7. D3 Kebidanan</h4>
        <table class="table1" data-aos="fade-left" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Dosen Pengajar</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('D3 Kebidanan');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>

        <h4 data-aos="fade-right" data-aos-delay="200">&nbsp;8. D3 Farmasi</h4>
        <table class="table1" data-aos="fade-right" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Ruangan</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('D3 Farmasi');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>

      <div class="table-prodi" style="margin-top: 52px;">
        <h4 style="margin: -22px auto 25px 0;" data-aos="fade-left" data-aos-delay="200">&nbsp;9. D3 RMIK</h4>
        <table class="table1" data-aos="fade-left" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Dosen Pengajar</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('D3 RMIK');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>

        <h4 data-aos="fade-right" data-aos-delay="200">&nbsp;10. D3 Akupuntur</h4>
        <table class="table1" data-aos="fade-right" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Ruangan</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('D3 Akupuntur');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>

      <div class="table-prodi" style="margin-top: 52px;">
        <h4 style="margin: -22px auto 25px 0;" data-aos="fade-left" data-aos-delay="200">&nbsp;11. Sarjana Terapan Anastesi</h4>
        <table class="table1" data-aos="fade-left" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Dosen Pengajar</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('Sarjana Terapan Anastesi');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>

        <h4 data-aos="fade-right" data-aos-delay="200">&nbsp;12. Sarjana Terapan Kebidanan</h4>
        <table class="table1" data-aos="fade-right" data-aos-delay="200">
          <thead>
            <tr>
              <th>No</th>
              <th>Prodi</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Sesi perkuliahan ke-</th>
              <th>Pukul</th>
              <th>Ruangan</th>
              <th>Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $result = $readData->readAllDataProdi('Sarjana Terapan Kebidanan');
            foreach ($result as $row) :
            ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nama_matkul'] ?></td>
                <td><?= $row['sesi'] ?></td>
                <td><?= $row['waktu'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><a href="confirm-update.php?P_id=<?= $row['prodi_id'] ?>"><button class="btn-option">Tambah</button></a></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>

    </div>
  </section>
  <!-- End Update -->

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
</body>

</html>