<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pengadaan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('arsha/assets/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('arsha/assets/img/apple-touch-icon.png" rel="apple-touch-icon')); ?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('arsha/assets/vendor/aos/aos.css" rel="stylesheet')); ?>">
  <link href="<?php echo e(asset('arsha/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('arsha/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('arsha/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('arsha/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('arsha/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('arsha/assets/css/style.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Pengajuan</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <?php echo $__env->make('utama.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    </div>
  </header><!-- End Header -->

  </section><!-- End Hero -->

  <main id="main">

  </main><!-- End #main -->

 <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">

    </section>
 	<!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Registrasi</h2>
          <p>Daftarkan usaha kamu Agar bisa melakukan pengajuan</p>
        </div>
        <div class="row">
          <?php if(\Session::has('berhasil')): ?>
           <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('berhasil')); ?>

           </div>
          <?php endif; ?>

          <?php if(\Session::has('gagal')): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo e(Session::get('gagal')); ?>

            </div>
          <?php endif; ?>
          
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="/regis" method="post" role="form" class="php-email-form">
              <div class="row">
              	<?php echo e(csrf_field()); ?>

                <div class="form-group col-md-6">
                  <label for="name">Nama Usaha</label>
                  <input type="text" name="nama_usaha" class="form-control" id="nama_usaha" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
              </div>
              <div class="row">
              <div class="form-group col-md-6">
                  <label for="name">No. NPWP</label>
                  <input type="text" name="npwp" class="form-control" id="npwp" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Password</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>
              </div>
              <div class="text-center"><button type="submit">Registrasi</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Pengadaan</h3>
            <p>
              108 Adam Street A<br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Pengadaan</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Pengadaan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('arsha/assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('arsha/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('arsha/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('arsha/assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('arsha/assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BKPSDM/pengadaan/resources/views/registrasi/registrasi.blade.php ENDPATH**/ ?>