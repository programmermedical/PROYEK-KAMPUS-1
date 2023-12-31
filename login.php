<?php
require_once 'proses-login.php';
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
  <link href="assets/img/itsk-logo.png" rel="icon" />
  <link href="assets/img/itsk-logo.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Jquery -->
  <script src="assets/js/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Knight
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Login Section ======= -->
  <section id="login">
    <div class="login-container" data-aos="zoom-out">
      <!-- <table class="t-login" border="1" cellspacing="0">
          <tr>
            <th rowspan="2">
                <a href="index.html" class="login-logo" data-aos="zoom-in"><img src="assets/img/itsk-logo.png" alt="ITSK-LOGO" width="75" height="75" /></a>
            </th> 
            <th style="padding: 13px 7px;">
                <h1 data-aos="zoom-in" style="font-size: 45px">
                Login Admin
              </h1>
            </th> 
          </tr>
          <tr>
            <th style="padding: 13px 7px;">
                <h2 data-aos="fade-up" style="margin-top: -15px">BADAN ADMINISTRASI UMUM KAMPUS 1</h2></th>
          </tr>
        </table> -->

      <div class="wrapper">
        <a data-aos="zoom-out"><img src="assets/img/itsk-logo.png" alt="ITSK-LOGO" style="width: 100px; height: 100px" /></a>
        <h1 data-aos="zoom-in">Login Admin</h1>
        <form action="" method="post">
          <div class="username" data-aos="fade-right">
            <div class="in-user">
              <div class="fa fa-user"></div>
            </div>
            <input type="username" placeholder="Masukkan username anda" name="username" required />
          </div>
          <div class="password" data-aos="fade-left">
            <div class="pass-lock">
              <div class="fa fa-lock"></div>
            </div>
            <div class="in-pass">
              <input type="password" placeholder="Masukkan password anda" name="password" required />
              <span class="show-hide"><i class="fa fa-eye"></i>
            </div>
            </span>
          </div>
          <script>
            const password = document.querySelector("input[type=password]");
            const btn_show = document.querySelector("i");
            btn_show.addEventListener("click", function() {
              if (password.type === "password") {
                password.type = "text";
                btn_show.classList.add("hide");
              } else {
                password.type = "password";
                btn_show.classList.remove("hide");
              }
            })
          </script>
          <p data-aos="zoom-in">
            <button class="btn-login" name="login">Login</button>
          </p>
        </form>
      </div>
    </div>
  </section>
  <!-- End login -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="box-shadow: 0 0 17px 4px hsla(0, 0%, 0%, 0.507);">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header"><img src="assets/img/itsk-logo.png" alt="" height="125" width="125" /></a>
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
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Template Sweet Alert JS File -->
  <script src="assets/sweetalert/sweetalert2.min.js"></script>

  <!-- Template Main SweeAlert -->
  <link href="assets/sweetalert/sweetalert2.min.css" rel="stylesheet" />
  <link href="assets/sweetalert/animate.min.css" rel="stylesheet" />

  <?php
  // if (isset($_GET["berhasil"])) : 
  ?>
  <!-- <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: 'Data telah berhasil diperbarui!!',
        iconColor: '#bafb08',
        confirmButtonColor: '#583fff',
        confirmButtonText: '&nbsp; OK &nbsp; '
      });
    </script> -->
  <?php
  // endif 
  ?>
  <?php if (isset($_GET["gagal"])) : ?>
    <script>
      Swal.fire({
        icon: 'warning',
        title: 'Gagal!!',
        text: 'Silahkan periksa kembali username dan password anda!!',
        confirmButtonColor: '#583fff',
        confirmButtonText: '&nbsp; OK &nbsp'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php endif ?>

</body>

</html>