<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Administrator::Umrohku.com</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url('assets/backend/images/favicon.png')?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/backend/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('assets/backend/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('assets/backend/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/backend/css/style.css')?>" rel="stylesheet">

 
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('assets/backend/css/themes/all-themes.css')?>" rel="stylesheet" />
    
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('assets/backend/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('assets/backend/plugins/bootstrap/js/bootstrap.js')?>"></script>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Mohon Tunggu...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Umrohku.com - PT.PANORAMA NUR MECCA</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                     
                    <!-- Notifications -->
                  
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons"> supervisor_account</i>  
                                </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Akun</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="<?php echo base_url('login/logout'); ?>" style="text-align: center;">
                                            <h4>  Keluar  </h4> 
                                        </a>
                                    </li>
                                     
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info"> 
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <!-- <li class="header">MAIN NAVIGATION</li> -->
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li> 
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">article</i>
                            <span>Artikel</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.html">Kumpulan Artikel</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Kategori</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">Tags</a>
                            </li> 
                            <li>
                                <a href="pages/ui/badges.html">Tentang</a>
                            </li> 
                            <li>
                                <a href="pages/ui/badges.html">Layanan</a>
                            </li> 
                            <li>
                                <a href="pages/ui/badges.html">Maskapai</a>
                            </li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">request_page</i>
                            <span>Promo</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.html">Promo</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Popup Promo</a>
                            </li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_in_ar</i>
                            <span>Paket Umroh / Haji</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.html"> Paket</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html"> Maskapai</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html"> Hotel</a>
                            </li> 
                        </ul>
                    </li>
                    <li> 
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">shopping_basket</i>
                            <span>Transaksi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.html"> Data Jamaah</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html"> Booking Jamaah</a>
                            </li> 
                            <li>
                                <a href="pages/ui/alerts.html"> Kontak Pesan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Pengaturan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.html">Slide</a>
                            </li> 
                            <li>
                                <a href="pages/ui/alerts.html">Pengaturan Situs</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Pengguna</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">Hak Akses</a>
                            </li> 
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 <a href="javascript:void(0);">PT. PANORAMA NUR MECCA</a> 
                </div>
                 
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header"> 
                <?php 
                    $this->load->view($konten);
                ?>
            </div> 
        </div>
    </section>
    
    <!-- Select Plugin Js -->
    <script src="<?php echo base_url('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('assets/backend/plugins/node-waves/waves.js')?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url('assets/backend/plugins/jquery-countto/jquery.countTo.js')?>"></script>
 
    <!-- ChartJs -->
    <script src="<?php echo base_url('assets/backend/plugins/chartjs/Chart.bundle.js')?>"></script>
  
    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/backend/js/admin.js')?>"></script>
    <script src="<?php echo base_url('assets/backend/js/pages/index.js')?>"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url('assets/backend/js/demo.js')?>"></script>
</body>

</html>
