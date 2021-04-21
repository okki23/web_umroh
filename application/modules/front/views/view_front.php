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
          
          <h3>Tentang Umrohku.com </h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php echo base_url('assets/frontend/img/logoumrohkublank.png')?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> -->
            <!-- <p class="font-italic"> -->
              <p style="text-align: justify;">
                Umrohku.com adalah Jembatan Mudah Menuju Baitullah. Perjalanan ke Tanah Suci tidak lagi harus menjadi sekedar impian. Kami membantu Anda mewujudkan niat suci untuk beribadah umrah dan haji dengan biaya yang terjangkau, Praktis, Nyaman serta Khusuk. Amanah Anda kami pegang dengan serius. Melayani sesuai dengan apa yang kami janjikan kepada Anda. Kami paham bahwa semua berbagai hal yang dialami selama perjalanan berpengaruh bagi keseluruhan pengalaman Anda dalam memenuhi panggilan ke rumah suci Allah SWT. Karena itu, kelancaran Anda dalam beribadah adalah hal yang paling utama bagi kami. di Umrohku.com, kami menggunakan aplikasi berbasis teknologi yang memudahkan calon jemaah menjalani proses pendaftaran hingga perjalanan umrah dan haji. dengan begitu, Anda dapat menjalankan ibadah di Tanah Suci dengan nyaman, sampai tiba kembali dengan tenang ke Tanah Air.
              </p>
             
            </p>
             
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="services" class="skills">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          
          <h3>Jasa Layanan Umrohku.com </h3>
          <p>Umrohku.com memiliki produk dan layanan yang beragam, dan dikemas secara baik untuk memenuhi kebutuhan pelanggan maupun kebutuhan untuk ibadah jamaah dengan berpegang teguh pada prinsip memudahkan dan memberikan kenyamanan dan keamanan.</p>
        </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-service">
                <i class="fa fa-suitcase" aria-hidden="true"></i> 
                <h4>Biro Perjalanan Resmi Lembaga</h4>
                <p>perjalanan Umroh dan Haji yang kredibel. Mengantongi Izin Penyelenggara Umroh Resmi dari Kementrian </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service">
                <i class="fa fa-bookmark" aria-hidden="true"></i> 
                <h4>Amanah dan Aman</h4>
                <p>Memastikan Anda berangkat tepat waktu sesuai jadwal. Dijamin Uang Kembali jika Anda gagal berangkat </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service">
                <i class="fa fa-diamond" aria-hidden="true"></i> 
                <h4>Pelayanan Terbaik</h4>
                <p>Pelayanan cepat, tamah dan terpercaya. Memberikan layanan terbaik untuk kebutuhan umroh dan haji lainnya </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i> 
                <h4>Profesional</h4>
                <p>Profesional Memiliki perwakilan di indonesia dan Arab Saudi yang menyiapkan seluruh akomodasi jemaah muali dari hotel, bus, katering dan kebutuhan lainnya </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service">
                <i class="fa fa-money" aria-hidden="true"></i> 
                <h4>Harga Terbaik</h4>
                <p>Memberikan harga yang terjangkau dan berkualitas bagi perjalanan umroh dan haji anda yang khusuk </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-service">
                <i class="fa fa-leanpub" aria-hidden="true"></i> 
                <h4>Pembimbing Ibadah</h4>
                <p>Pembimbing Ibadah Komitmen bimbingan ibadan yang amanah sesuai dengan syariat islam mulai dari manasik umroh dan haji hingga perjalanan ibadah. </p>
              </div>
            </div>

          </div> 
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="paket_umroh" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="section-title"> 
          <h3> Pilihan Paket Umroh </h3> 
        </div>
            <div class="row mb-md-3"> 
              <div class="col-lg-3"> 
                  <div class="card shadow-sm border-light mb-3">
                        <a href="#" class="position-relative">
                            <img src="<?php echo base_url('assets/frontend/img/mecca.jpg')?>" class="card-img-top" alt="image"> </a>
                        <div class="card-body">
                            <a href="#">
                                <h6>Paket Umroh Syari</h6>
                            </a>
                            <span class="h6 font-weight-bold"> Mulai Dari <span style="color:#FFCE3B;"> Rp. 28.000.000</span> </span>
                            <hr>  
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-calendar"></i> Berangkat </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> 26 Des 2020 </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-clock-time"></i> Durasi </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> 9 Jam </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-5-star-hotel"></i> Hotel   </span>
                              </div>
                              <div class="col-md-6 col-lg-6" style="font-size: 12px; color:#FFCE3B;">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-google-map"></i>  Jalan Dari </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> Jakarta </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-airplane"></i> Maskapai  </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> Garuda </span>
                              </div>  
                            </div> 
                            <br>
                            <button type="button" class="btn btn-outline-primary btn-sm btn-block"> Detail </button>
                        </div>
                    </div>   
                </div>  
                
                <div class="col-lg-3"> 
                  <div class="card shadow-sm border-light mb-3">
                        <a href="#" class="position-relative">
                            <img src="<?php echo base_url('assets/frontend/img/mecca.jpg')?>" class="card-img-top" alt="image"> </a>
                        <div class="card-body">
                            <a href="#">
                                <h6>Paket Umroh Syari</h6>
                            </a>
                            <span class="h6 font-weight-bold"> Mulai Dari <span style="color:#FFCE3B;"> Rp. 28.000.000</span> </span>
                            <hr>  
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-calendar"></i> Berangkat </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> 26 Des 2020 </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-clock-time"></i> Durasi </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> 9 Jam </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-5-star-hotel"></i> Hotel   </span>
                              </div>
                              <div class="col-md-6 col-lg-6" style="font-size: 12px; color:#FFCE3B;">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-google-map"></i>  Jalan Dari </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> Jakarta </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-airplane"></i> Maskapai  </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> Garuda </span>
                              </div>  
                            </div> 
                            <br>
                            <button type="button" class="btn btn-outline-primary btn-sm btn-block"> Detail </button>
                        </div>
                    </div>   
                </div> 

                <div class="col-lg-3"> 
                  <div class="card shadow-sm border-light mb-3">
                        <a href="#" class="position-relative">
                            <img src="<?php echo base_url('assets/frontend/img/mecca.jpg')?>" class="card-img-top" alt="image"> </a>
                        <div class="card-body">
                            <a href="#">
                                <h6>Paket Umroh Syari</h6>
                            </a>
                            <span class="h6 font-weight-bold"> Mulai Dari <span style="color:#FFCE3B;"> Rp. 28.000.000</span> </span>
                            <hr>  
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-calendar"></i> Berangkat </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> 26 Des 2020 </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-clock-time"></i> Durasi </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> 9 Jam </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-5-star-hotel"></i> Hotel   </span>
                              </div>
                              <div class="col-md-6 col-lg-6" style="font-size: 12px; color:#FFCE3B;">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-google-map"></i>  Jalan Dari </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> Jakarta </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-airplane"></i> Maskapai  </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> Garuda </span>
                              </div>  
                            </div> 
                            <br>
                            <button type="button" class="btn btn-outline-primary btn-sm btn-block"> Detail </button>
                        </div>
                    </div>   
                </div> 

                <div class="col-lg-3"> 
                  <div class="card shadow-sm border-light mb-3">
                        <a href="#" class="position-relative">
                            <img src="<?php echo base_url('assets/frontend/img/mecca.jpg')?>" class="card-img-top" alt="image"> </a>
                        <div class="card-body">
                            <a href="#">
                                <h6>Paket Umroh Syari</h6>
                            </a>
                            <span class="h6 font-weight-bold"> Mulai Dari <span style="color:#FFCE3B;"> Rp. 28.000.000</span> </span>
                            <hr>  
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-calendar"></i> Berangkat </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> 26 Des 2020 </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-clock-time"></i> Durasi </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> 9 Jam </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-5-star-hotel"></i> Hotel   </span>
                              </div>
                              <div class="col-md-6 col-lg-6" style="font-size: 12px; color:#FFCE3B;">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-google-map"></i>  Jalan Dari </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> Jakarta </span>
                              </div>  
                            </div> 
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small bold"> <i class="icofont-airplane"></i> Maskapai  </span>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <span class="h6 small"> Garuda </span>
                              </div>  
                            </div> 
                            <br>
                            <button type="button" class="btn btn-outline-primary btn-sm btn-block"> Detail </button>
                        </div>
                    </div>   
                </div> 
             </div>    
      </div>
    </section><!-- End Counts Section -->

     

  <!-- ======= Team Section ======= -->
  <section id="maskapai" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title"> 
        <h3> Maskapai </h3> 
      </div>

      <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Garuda Indonesia Airlines</h4>
                </div>
                <img src="<?php echo base_url('assets/frontend/img/gi_flight.jpg')?>" alt="...">
            </div>
        </div>
      
        <div class="col-xs-6 col-sm-4 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                  <h4>Garuda Indonesia Airlines</h4>
                </div>
                <img src="<?php echo base_url('assets/frontend/img/gi_flight.jpg')?>" alt="...">
            </div>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                  <h4>Garuda Indonesia Airlines</h4>
                </div>
                <img src="<?php echo base_url('assets/frontend/img/gi_flight.jpg')?>" alt="...">
            </div>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                  <h4>Garuda Indonesia Airlines</h4>
                </div>
                <img src="<?php echo base_url('assets/frontend/img/gi_flight.jpg')?>" alt="...">
            </div>  
        </div> 
    </div>
 

    </div>
  </section><!-- End Team Section -->

     

    <!-- ======= Portfolio Section ======= -->
    <section id="artikel" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Berita Artikel</h3> 
        </div>
         
        <div class="container">
         
          <div class="row">
              <div class="col-md-12">
                  <div id="news-slider2" class="owl-carousel">
                      <div class="post-slide2">
                          <div class="post-img">
                              <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-1.jpg" alt=""></a>
                          </div>
                          <div class="post-content">
                              <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                              <p class="post-description">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                              </p>
                              <ul class="post-bar">
                                  <li><i class="fa fa-calendar"></i> June 5, 2016</li>
                                  <li>
                                      <i class="fa fa-folder"></i>
                                      <a href="#">Mockup</a>
                                      <a href="#">Graphics</a>
                                      <a href="#">Flayers</a>
                                  </li>
                              </ul>
                              <a href="#" class="read-more">read more</a>
                          </div>
                      </div>
   
                      <div class="post-slide2">
                          <div class="post-img">
                              <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-2.jpg" alt=""></a>
                          </div>
                          <div class="post-content">
                              <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                              <p class="post-description">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                              </p>
                              <ul class="post-bar">
                                  <li><i class="fa fa-calendar"></i> June 7, 2016</li>
                                  <li>
                                      <i class="fa fa-folder"></i>
                                      <a href="#">Mockup</a>
                                      <a href="#">Graphics</a>
                                      <a href="#">Flayers</a>
                                  </li>
                              </ul>
                              <a href="#" class="read-more">read more</a>
                          </div>
                      </div>
                      
                      <div class="post-slide2">
                          <div class="post-img">
                              <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-3.jpg" alt=""></a>
                          </div>
                          <div class="post-content">
                              <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                              <p class="post-description">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                              </p>
                              <ul class="post-bar">
                                  <li><i class="fa fa-calendar"></i> June 5, 2016</li>
                                  <li>
                                      <i class="fa fa-folder"></i>
                                      <a href="#">Mockup</a>
                                      <a href="#">Graphics</a>
                                      <a href="#">Flayers</a>
                                  </li>
                              </ul>
                              <a href="#" class="read-more">read more</a>
                          </div>
                      </div>
                      
                      <div class="post-slide2">
                          <div class="post-img">
                              <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-4.jpg" alt=""></a>
                          </div>
                          <div class="post-content">
                              <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                              <p class="post-description">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                              </p>
                              <ul class="post-bar">
                                  <li><i class="fa fa-calendar"></i> June 5, 2016</li>
                                  <li>
                                      <i class="fa fa-folder"></i>
                                      <a href="#">Mockup</a>
                                      <a href="#">Graphics</a>
                                      <a href="#">Flayers</a>
                                  </li>
                              </ul>
                              <a href="#" class="read-more">read more</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
     
      </div>
      <div align="center">
        <img src="<?php echo base_url('assets/frontend/img/downloadapp.png')?>" width="100%" class="img-fluid" alt="">
        <br>
        &nbsp;
        <br>
        &nbsp;
        <br>
        &nbsp;
        <br>
        &nbsp;
        <iframe width="700" height="500" src="https://www.youtube.com/embed/ApG9WZAbrws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         
      </div>
      
    </section><!-- End Portfolio Section -->
   
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

  <div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Promo !!!! </h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
				      <img src="<?php echo base_url('assets/frontend/images/promonaik.jpeg')?>" style="width: 100%; height: auto;" alt="">   
            </div> 
        </div>
    </div>
</div>
 
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
  
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/up_btn/up_btn.css')?>" />
  <script src="<?php echo base_url('assets/frontend/up_btn/up_btn.js')?>"></script>
  <script type="text/javascript">
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
 
    $("#myModal").modal('show');
    
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