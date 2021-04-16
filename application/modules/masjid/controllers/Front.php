<?php
/**
 * author : Okki Setyawan
 * umrohku team
 * copyright PT.Panorama Nur Mecca 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
 
	public function index()
	{
		$this->load->view('front/view_front');
	}
}
