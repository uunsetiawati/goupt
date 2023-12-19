<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UPT GO | Short Link UPT Pelatihan Dinas Koperasi dan UKM Jawa Timur</title>
  <meta content="Shortlink asli buatan UPT Pelatihan Dinas Koperasi dan UKM Jawa Timur" name="descriptison">
  <meta content="Pusat Belajar Koperasi dan UKM" name="keywords">

  <meta name="title" content="UPT GO | UPT Pelatihan Dinas Koperasi dan UKM Provinsi Jawa Timur">
  <meta name="description" content="Shortlink UPT Pelatihan Dinas Koperasi dan UKM Provinsi Jawa Timur">
  <meta name="image" content="https://d1fdloi71mui9q.cloudfront.net/iA77vXfcT265XvBR2dZs_AP04aC2F3SG4yePf">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://go.uptkukm.id/">
  <meta property="og:title" content="UPTGO | UPT Pelatihan Dinas Koperasi dan UKM Provinsi Jawa Timur">
  <meta property="og:description" content="Shortlink UPT Pelatihan Dinas Koperasi dan UKM Provinsi Jawa Timur">
  <meta property="og:image" content="https://d1fdloi71mui9q.cloudfront.net/iA77vXfcT265XvBR2dZs_AP04aC2F3SG4yePf">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://go.uptkukm.id/">
  <meta property="twitter:title" content="UPTGO | UPT Pelatihan Dinas Koperasi dan UKM Provinsi Jawa Timur">
  <meta property="twitter:description" content="Shortlink UPT Pelatihan Dinas Koperasi dan UKM Provinsi Jawa Timur">
  <meta property="twitter:image" content="https://d1fdloi71mui9q.cloudfront.net/iA77vXfcT265XvBR2dZs_AP04aC2F3SG4yePf">

  <!-- Favicons -->
  <link href="<?=base_url('assets/img/favicon.png')?>" rel="icon">
  <link href="<?=base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/icofont/icofont.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/venobox/venobox.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/aos/aos.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v2.0.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?=base_url()?>"><span>UPT<B class="text-primary">GO</B></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="<?=base_url()?>"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url()?>">Beranda</a></li>
          <li><a href="http://uptdiklatukm.diskopukm.jatimprov.go.id/">Website</a></li>
          <li><a href="http://sijawara.diskopukm.jatimprov.go.id/">SiJawara</a></li>
          <li><a href="http://uptkukm.id/">UPT Gate</a></li>
          <li><a href="<?=base_url('cert')?>">Validasi Sertifikat</a></li>
          <li class="get-started"><a href="http://wa.me/+6281331220006">Call Center</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1 class="text-dark">Jadikan semua lebih sederhana</h1>
          <h2 class="text-primary">
              Dari UPT untuk Koperasi dan UKM<br>
              <?= $total_link ?> url Telah disederhanakan.<br> 
              <?= $total_hits ?> total klik 
          </h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?=base_url('assets/img/hero.png')?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <section id="contact" class="contact">
    <div class="container">

      <div class="row">        
        <div class="col-lg-12 mt-12 mt-lg-0 d-flex align-items-stretch" data-aos-delay="200">
          <form action="<?= base_url('simpan')?>" method="post" class="php-email-form">           
            <div class="form-group">
              <label for="name">Kode</label>
              <input type="text" class="form-control" name="kode" value="<?= set_value('kode'); ?>" placeholder="Ex: dokumen-upt" required/>
              <?php echo form_error('kode')?>
            </div>
            <div class="form-group">
              <label for="name">Link</label>
              <input type="url" class="form-control" name="link" value="<?= set_value('link'); ?>" placeholder="Ex: https://www.google.com/" required/>
              <?php echo form_error('link')?>
            </div>
            <div class="form-group">
              <label for="name">Keyakses</label>
              <input type="text" class="form-control" name="keyaccess" value="<?= set_value('keyaccess'); ?>" placeholder="tanya admin" required/>
              <?php echo form_error('keyaccess')?>
            </div>            
            <div class="mb-3">
              <?= $this->session->flashdata('success');?>
            </div>
            <div class="text-center"><button type="submit">Short It !</button> <br> atau <br> <a class="btn btn-outline-warning btn-sm" href="<?= base_url("s")?>">Cari Menggunakan Kode</a></div>
            <div class="text-center"></div>
          </form>
        </div>
      </div>

    </div>
  </section>
  
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Tim IT UPT (FIF/US)</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        Thanks <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?=base_url('assets/vendor/jquery.easing/jquery.easing.min.js')?>"></script>
  <script src="<?=base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
  <script src="<?=base_url('assets/vendor/venobox/venobox.min.js')?>"></script>
  <script src="<?=base_url('assets/vendor/owl.carousel/owl.carousel.min.js')?>"></script>
  <script src="<?=base_url('assets/vendor/aos/aos.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/js/main.js')?>"></script>

  <script type="text/javascript">
    function CopyUrl() {
      var copyText = document.getElementById("link");

      copyText.select();
      copyText.setSelectionRange(0,99999);
      document.execCommand("copy");
      alert("Berhasil di copy : " + copyText.value);
    }
  </script>
</body>

</html>
