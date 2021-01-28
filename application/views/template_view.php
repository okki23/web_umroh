<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $judul; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url('assets/images/rp_logo.png'); ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
 
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />
     
    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />
    
    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />
    
    <link href="<?php echo base_url(); ?>assets/css/card_custom.css" rel="stylesheet" />
    

    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>
    <link href="<?php echo base_url('assets/plugins/jquery-ui/css/base/jquery-ui.css'); ?>" rel="stylesheet">
 
 
    <!-- TinyMCE -->
    <script src="<?php echo base_url(); ?>assets/plugins/tinymce/tinymce.js"></script>
    
    <script src="<?php echo base_url('assets/plugins/elFinder/js/elfinder.min.js'); ?>"></script>
    <link href="<?php echo base_url('assets/plugins/elFinder/css/theme.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/elFinder/css/elfinder.min.css'); ?>" rel="stylesheet">
    
 
    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.rowsGroup.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
 
    
    <script src="<?php echo base_url(); ?>assets/plugins/autosize/autosize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/ui/notifications.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/momentjs/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>   
    <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
    
    
	 
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
     
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
               <a class="navbar-brand" href="<?php echo base_url(); ?>">  
                <?php echo $judul; ?> </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                     
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true">    <i class="material-icons">person</i>   </a></li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                
				 
					<ul class="list">
					<!-- <li>
                        <a href="<?php echo base_url('dashboard'); ?>">
                            <i class="material-icons">home</i>
                            <span>Home  </span>
                        </a>
                    </li> 
                    <li class="header">Menu Master</li> 
                    <li>
                        <a href="<?php echo base_url('customer'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Customer</span>
                        </a>
                    </li>  -->
                    <li>
                        <a href="<?php echo base_url('about'); ?>">
                           <i class="material-icons">dns</i>
                            <span>About</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('cat_pricelist'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Kategori Pricelist Item</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('price_list_item'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Pricelist Item</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('price_list_package'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Pricelist Package</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('client'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Client</span>
                        </a>
                    </li> 
                     <li>
                        <a href="<?php echo base_url('news'); ?>">
                           <i class="material-icons">dns</i>
                            <span>News</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('googlemaps'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Google Maps</span>
                        </a>
                    </li>  
                    <li>
                        <a href="<?php echo base_url('cat_foto'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Kategori Foto</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('foto'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Foto</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('slideshow'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Slideshow</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('user'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Manajemen User</span>
                        </a>
                    </li> 
                   <!--  <li>
                        <a href="<?php echo base_url('user'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Social Media</span>
                        </a>
                    </li>  -->
                    <li>
                        <a href="<?php echo base_url(); ?>" target="_blank">
                           <i class="material-icons">dns</i>
                            <span>Pratinjau Website</span>
                        </a>
                    </li> 
                    <!-- <li>
                        <a href="<?php echo base_url('sales'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Sales</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('admin_pppu'); ?>">
                           <i class="material-icons">dns</i>
                            <span>Admin PPPU</span>
                        </a>
                    </li> 
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">dns</i>
                            <span>User</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('akun_sales'); ?>">Akun Sales</a>
                            </li>
                            <li>
                                 <a href="<?php echo base_url('akun_admin_pppu'); ?>">Akun Admin PPPU</a>
                            </li> 
                        </ul>
                    </li>
                    <li class="header">Menu Transaksi</li>
                    <li>
                        <a href="<?php echo base_url('booking_fee'); ?>">
                            <i class="material-icons">dns</i>
                            <span>Booking Fee</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('pu'); ?>">
                            <i class="material-icons">dns</i>
                            <span>PU</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('validasi_pppu'); ?>">
                            <i class="material-icons">dns</i>
                            <span>Validasi P3U</span>
                        </a>
                    </li> 
                      <li>
                        <a href="<?php echo base_url('booking_fee'); ?>">
                            <i class="material-icons">dns</i>
                            <span>Refund</span>
                        </a>
                    </li> 
                    <li>
					<li class="header">Laporan</li>
                    <li>
                        <a href="<?php echo base_url('closing'); ?>">
                            <i class="material-icons">dns</i>
                            <span>Report Closing</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url('refund'); ?>">
                            <i class="material-icons">dns</i>
                            <span>Report Refund</span>
                        </a>
                    </li>   -->
					</ul>
					
				  
			   
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);"> Ranty Pesta </a>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
      
            <div class="tab-content">
            
            
                    <div class="demo-settings">
                        <p> Hai <?php echo $this->session->userdata('username') . " ! <br> Anda masuk sebagai " .level_help($this->session->userdata('session')); ?> </p>
                        <ul class="demo-choose-skin">
                       
                         <a href="<?php echo base_url('login/logout'); ?>">
                        <li>
                          
                           <i class="material-icons">power_settings_new</i>
                            <span>Keluar</span>
                         
                        </li>
                          </a>
                       
                    </ul>
                    </div>
                
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>

	<?php 
	echo $this->load->view($konten);
	?>
  
  

 
</body>

</html>