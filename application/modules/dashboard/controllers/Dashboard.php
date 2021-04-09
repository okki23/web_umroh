<?php
/**
 * author : Okki Setyawan
 * umrohku team
 * copyright PT.Panorama Nur Mecca 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
 
	public function index()
	{
		$this->load->view('dashboard/view_dashboard');
	}
}
