<?php
error_reporting(0);
/**
 * author : Okki Setyawan
 * umrohku team
 * copyright PT.Panorama Nur Mecca 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Alquran extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('alquran/malquran','ma');
	}

	public function index()
	{
		$this->load->view('alquran/view_alquran');
	}

	public function get_surah()
	{  
		$data = $this->ma->fetch_surah();
		echo json_encode($data,TRUE);
	}
 
}
