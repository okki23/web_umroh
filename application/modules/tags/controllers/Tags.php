<?php
/**
 * author : Okki Setyawan
 * umrohku team
 * copyright PT.Panorama Nur Mecca 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends CI_Controller {
 
	public $title = 'Tags';
	
	public function __construct(){
		parent::__construct();
		$this->load->model('tags/mtags','mt');
	}
	public function index()
	{
		// $data['judul'] = $this->title;  
		$data['konten'] = 'tags/view_tags';
		$this->load->view('template_backend',$data);		
	}

	public function get_tags(){
		$data = $this->mt->fetch_tags();
		echo json_encode($data,TRUE);
	}
}
