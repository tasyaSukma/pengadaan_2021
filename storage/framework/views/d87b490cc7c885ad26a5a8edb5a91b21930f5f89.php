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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Mmemberikan Kesempatan Pada UMKM</h1>
          <h2>Kami Memberikan Kesempatan pada UMKM yang ingin mengajukan pengajuan barang dan jasa yang dimiliki</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <?php if($token=="kosong"): ?>
            <a href="/registrasi" class="btn-get-started scrollto">Daftar Sekarang</a>
            <?php else: ?>
            <a href="/listSupplier" class="btn-get-started scrollto">Ajukan Sekarang</a>
            <?php endif; ?>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo e(asset('arsha/assets/img/hero-img.png')); ?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo e(asset('arsha/assets/img/clients/client-1.png')); ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo e(asset('arsha/assets/img/clients/client-2.png')); ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo e(asset('arsha/assets/img/clients/client-3.png')); ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo e(asset('arsha/assets/img/clients/client-4.png')); ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo e(asset('arsha/assets/img/clients/client-5.png')); ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo e(asset('arsha/assets/img/clients/client-6.png')); ?>" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Ketentuan</h2>
          <p>Untuk mengajukan pengadaan barang dan jasa, Peserta harus sesuai kualifikasi berikut</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Memiliki Izin Usaha</a></h4>
              <p>Bagi peserta yang ingin mengajukan pengajuang peserta wajib terdaftar dan memiliki izin usaha</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Minimal Usaha 3 Tahun</a></h4>
                <p>Bagi kamu yang memiliki usaha sudah lama lebih atau sama dengan 3 tahun bisa mengajukan pengajuan</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Usaha Berbadan Hukum</a></h4>
              <p>Usaha kamu wajib berbadan hukum minimal CV sudah terdaftar sekurang-kurangnya 3 tahun</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Memiliki Rekening Perusahaan</a></h4>
              <p>Untuk rekening usaha wajib terpisah dari rekening pribadi, dan untuk bank harus menggunakan bank BUMN</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Daftar Pengadaan</h2>
          <p>Berikut adalah daftar pengadaan yang sedang aktif</p>
        </div>
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php $__currentLoopData = $pengadaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pgd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="<?php echo e($pgd->deskripsi); ?>" target="_blank">
            <div class="portfolio-img"><img src="<?php echo e(asset(Storage::url($pgd->gambar))); ?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4><?php echo e($pgd->nama_pengadaan); ?></h4>
              <p>Anggaran : Rp <span class="tag tag-success"><?php echo e(number_format($pgd->anggaran,0,",",".")); ?></span></p>
            </div>
          </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section><!-- End Portfolio Section -->   

    <div class="d-flex justify-content-center"><?php echo e($pengadaan->links()); ?></div>

     <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Ajukan Pengajuan</h3>
            <p> Kamu dapat daftarkan usaha kamu agar dapat mengajukan pengajuan yang sedang dibutuhkan.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <?php if($token == "kosong"): ?>
            <a class="cta-btn align-middle" href="/registrasi">Daftar Sekarang</a>
            <?php else: ?>
            <a class="cta-btn align-middle" href="/listSupplier">Ajukan Sekarang</a>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Pengadaan</h3>
            <p>
              Jalan Siliwangi No.02<br>
              Kompleks Pemerintah Daerah 2<br>
              Karawang <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Pengadaan/p>
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
  <script src="<?php echo e(asset('arsha/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('arsha/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('arsha/assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('arsha/assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BKPSDM/pengadaan/resources/views/utama/home.blade.php ENDPATH**/ ?>