<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class File_manager extends Parent_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        //$this->load->helper('path');
        //echo set_RealPath('uploads'). " - ".base_url('uploads');die();
        $this->load->view('file_manager/filemanager');
    }
    
    function elfinder_init() {
         $this->load->helper('path');   
    $opts = array(
                  //'debug' => true, 
                 'roots' => array(
                                  array( 
                                       'driver' => 'LocalFileSystem', 
                                       'path'   => set_realpath('./file_manager_dir/'), 
                                       'URL'    => site_url('./file_manager_dir/') . '/'
                                       //more elFinder options here
                                      ) 
                                  )
                 );

    $this->load->library('elfinder_lib', $opts);
    }
    
    function filetes(){
        $this->load->view('file_manager/filetes');
    }

}
