<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Front extends Parent_Controller {
 
  	var $nama_tabel = 'm_user';
  	var $daftar_field = array('id','id_user','username','password','user_insert','date_insert','user_update','date_update');
  	var $primary_key = 'id';

 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_front');
		$this->load->library('MyPHPMailer'); // load library
 	}
	public function index(){ 
        $data['title'] = 'lempar depan';
		$this->load->view('front/front_view',$data);
	} 
	 
}
