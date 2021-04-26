<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Umrohku.com</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/frontend/img/favicon.png')?>" rel="icon">
  <link href="<?php echo base_url('assets/frontend/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/frontend/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/vendor/icofont/icofont.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/vendor/venobox/venobox.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/vendor/aos/aos.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/css/swiper.min.css')?>">
  <!-- Template Main CSS File -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <link href="<?php echo base_url('assets/frontend/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/css/new_style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/css/custom.css')?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  
  <script data-ad-client="ca-pub-7665677534907559" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      
      <div class="social-links"> 
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-whatsapp"></i></a> 
        <a href="#" class="skype"><i class="icofont-mail"></i></a> 
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html">BizLand<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo mr-auto"><img src="<?php echo base_url('assets/frontend/img/logoumrohku_white.png')?>" alt=""></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header"> Beranda</a></li>
          <li><a href="javascript:void(0);">Promo</a></li>
          <li><a href="#services">Paket Umroh</a></li>
          <li><a href="#maskapai">Maskapai</a></li>
          <li><a href="#artikel">Artikel</a></li>
          <li><a href="#tentang">Tentang Kami</a></li> 
          <li><a href="javascript:void(0);">Lain-Lain</a></li> 
          <li><a href="javascript:void(0);" onclick="Notfound();" class="btn btn-lg btn-warning"> Anggota </a></li>  
        </ul> 
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div class="container">
    <a class="navbar-brand" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/frontend/images/slider/umroh_slider_1.jpg')?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/frontend/images/slider/umroh_slider_2.jpg')?>" class="d-block w-100" alt="...">
          
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/frontend/images/slider/umroh_slider_3.jpg')?>" class="d-block w-100" alt="...">
          
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
  
  <main id="main">
</header>

<div class="container panel-menu">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="row">
          <div class="col-lg" style="padding-top: 30px;">
          <a href="#">
            <img src="<?php echo base_url('assets/frontend/img/logoumrohku.png')?>" class="float-left">
            <span class="h6 bold" style="float: left; color:black; font-weight: bold; margin-left: 10px; padding-top: 7px;"> Umrohku </span>
          </a>
          </div>
          <div class="col-lg" style="padding-top: 30px;">
          <a href="#">
            <img src="<?php echo base_url('assets/frontend/img/logoumrohku.png')?>" class="float-left">
            <span class="h6 bold" style="float: left;  color:black; font-weight: bold;  margin-left: 10px; padding-top: 7px;"> Paspor </span>
          </a>
          </div>
          <div class="col-lg" style="padding-top: 30px;">
          <a href="<?php echo base_url('alquran'); ?>"> 
            <img src="<?php echo base_url('assets/frontend/img/logoumrohku.png')?>" class="float-left">
            <span class="h6 bold" style="float: left; color:black; font-weight: bold;  margin-left: 10px; padding-top: 7px;"> Al Quran </span>
          </a>
          </div>
          <div class="col-lg" style="padding-top: 30px;">
          <a href="#"> 
            <img src="<?php echo base_url('assets/frontend/img/logoumrohku.png')?>" class="float-left">
            <span class="h6 bold" style="float: left; color:black;  font-weight: bold;  margin-left: 10px; padding-top: 7px;"> Masjid </span>
          </a>
          </div>
          <div class="col-lg" style="padding-top: 30px;">
          <a href="#"> 
            <img src="<?php echo base_url('assets/frontend/img/logoumrohku.png')?>" class="float-left">
            <span class="h6 bold" style="float: left; color:black; font-weight: bold;  margin-left: 10px; padding-top: 7px;"> Jadwal Solat </span>
          </a>
          </div>
      </div>
    </div>
  </div>
</div>
    <!-- ======= About Section ======= -->
    <section id="tentang" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <div id="listing">
          <h3>Alquran </h3>  
              <table class="table table-bordered table-striped table-hover js-basic-example" id="example" > 
                <thead>
                  <tr>
                      <th style="width:10%;">No</th> 
                      <th style="width:40%;">Surah</th> 
                      <th style="width:40%;">Opsi</th> 
                  </tr>
              </thead> 
              </table>  
          </div>
          </div>
          </div>

          <div id = "recite" style="margin-right:auto; margin-left:auto; font: size 14px;"> 
          </div>
        
    </section><!-- End About Section -->
 
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        
        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Butuh Bantuan Umrohku.com?</span></h3>
          <p>Kami akan dengan senang hati membantu Anda</p>
          <p>kami pada waktu jam operasional.</p>
        </div>
      

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Ruko Mega Grosir Cempaka Mas, Blok P No.23 , Jl.Letjen Suprapto, Jakarta Pusat, 13110</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email </h3>
              <p>info@umrohku.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon</h3>
              <p>021-24504863</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.372127269251!2d106.87289115802109!3d-6.164993998884158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f52b2ae4746d%3A0x40233a2cdcfd7ea2!2sumrohku.com!5e0!3m2!1sid!2sid!4v1605680350844!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.372127269251!2d106.87289115802109!3d-6.164993998884158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f52b2ae4746d%3A0x40233a2cdcfd7ea2!2sumrohku.com!5e0!3m2!1sid!2sid!4v1605680350844!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.372127269251!2d106.87289115802109!3d-6.164993998884158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f52b2ae4746d%3A0x40233a2cdcfd7ea2!2sumrohku.com!5e0!3m2!1sid!2sid!4v1605680350844!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subyek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan anda sudah terkirim!</div>
              </div>
              <div class="text-center">
                <!-- <button type="submit">Kirim Pesan</button> -->
                <button type="button" class="btn btn-outline-primary btn-sm btn-block"> Kirim Pesan </button>
              </div>
            </form>
          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->
    <section id="clients" class="clients section-bg">
      <div class="container aos-init aos-animate" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/frontend/img/asita.png')?>" style="width: max-content;" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/frontend/img/logoiata.png')?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/frontend/img/logohimpuh.png')?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/frontend/img/ekual.jpg')?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/frontend/img/logokan.jpg')?>" class="img-fluid" alt="">
          </div>

           
        </div>

      </div>
    </section>
  </main><!-- End #main -->
   
  <!-- ======= Footer ======= -->
  <footer id="footer"> 
     
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><span>Umrohku.com</span></h3>
            <p>
              Ruko Mega Grosir Cempaka Mas <br>
              Blok P No.23<br>
              Jl.Letjen Suprapto, Sumur Batu, Jakarta Pusat, 13110 <br><br>
              Indonesia<br><br>
              <strong>Telepon:</strong> 021-24504863<br>
              <strong>Email:</strong> info@umrohku.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Kunjungi Kami di Social Media</h4>
            <p>dapatkan informasi terupdate lainnya yang ada di akun sosmed official kami</p>
            <div class="social-links mt-3">
              
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> 
              <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>  
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        <!-- &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved -->
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->
 
 
  <div class="elfsight-app-93871956-e1d2-4436-a1f2-cfbbc28886d7"></div>
  <div class="elfsight-app-2d8c698d-2966-4b88-a365-6c4808ed42b6"></div>
  <div id="preloader"></div>
  <!-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->
  
  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/frontend/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/jquery.easing/jquery.easing.min.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/php-email-form/validate.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/waypoints/jquery.waypoints.min.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/counterup/counterup.min.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/owl.carousel/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/venobox/venobox.min.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/vendor/aos/aos.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/frontend/js/main.js')?>"></script>
  <script src="<?php echo base_url('assets/frontend/js/swiper.min.js')?>"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script src="https://apps.elfsight.com/p/platform.js" defer></script> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css"> 
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/up_btn/up_btn.css')?>" />
  <script src="<?php echo base_url('assets/frontend/up_btn/up_btn.js')?>"></script>
  <script type="text/javascript">

      function Pilih(id){
        // alert(id);
        $("#listing").slideUp();
        $.get("<?php echo base_url('alquran/recite_quran/'); ?>"+id,function(result){
          $("#recite").html(result);
        });
         
      }
      $('#example').DataTable( {
            "ajax": "<?php echo base_url(); ?>alquran/get_surah",
            select: true               
        });  
      function Notfound(){
        alert('belum ada konten terkait!');
      }

     
      up({

      // bottom position
      bottom: '75px',

      // right position
      right: '20px',

      // width
      width: '45px',

      // height
      height: '45px',

      // background color
      bg: 'blue',

      // custom icon
      src: '<?php echo base_url('assets/frontend/up_btn/chevron-up-solid.svg')?>',

      // distance from the top to show the back to top button
      whenShow: 400,

      // circular button?
      circle: true

      });
    let i=2;
  
    
  $(document).ready(function(){
  
    $('#list_surah').DataTable();
    var radius = 200;
    var fields = $('.itemDot');
    var container = $('.dotCircle');
    var width = container.width();
  radius = width/2.5;
  
     var height = container.height();
    var angle = 0, step = (2*Math.PI) / fields.length;
    fields.each(function() {
      var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
      var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
      if(window.console) {
        console.log($(this).text(), x, y);
      }
      
      $(this).css({
        left: x + 'px',
        top: y + 'px'
      });
      angle += step;
    });
    
    
    $('.itemDot').click(function(){
      
      var dataTab= $(this).data("tab");
      $('.itemDot').removeClass('active');
      $(this).addClass('active');
      $('.CirItem').removeClass('active');
      $( '.CirItem'+ dataTab).addClass('active');
      i=dataTab;
      
      $('.dotCircle').css({
        "transform":"rotate("+(360-(i-1)*36)+"deg)",
        "transition":"2s"
      });
      $('.itemDot').css({
        "transform":"rotate("+((i-1)*36)+"deg)",
        "transition":"1s"
      });
      
      
    });
    
    setInterval(function(){
      var dataTab= $('.itemDot.active').data("tab");
      if(dataTab>6||i>6){
      dataTab=1;
      i=1;
      }
      $('.itemDot').removeClass('active');
      $('[data-tab="'+i+'"]').addClass('active');
      $('.CirItem').removeClass('active');
      $( '.CirItem'+i).addClass('active');
      i++;
      
      
      $('.dotCircle').css({
        "transform":"rotate("+(360-(i-2)*36)+"deg)",
        "transition":"2s"
      });
      $('.itemDot').css({
        "transform":"rotate("+((i-2)*36)+"deg)",
        "transition":"1s"
      });
      
      }, 5000);
    
  });
  
  
  $("#news-slider2").owlCarousel({
        items:3,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[980,2],
        itemsMobile:[600,1],
        pagination:false,
        navigationText:false,
        autoPlay:true
    });
    
 
  
    </script>
</body>

</html>