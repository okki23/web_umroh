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

	public function get_surah(){
		// $data = file_get_contents("https://api.quran.sutanlab.id/surah");
		// $pre = json_decode($data); 
	
		// echo "<table id='list_surah' class='display'>";
		// echo "<tr>";
		// echo "<td> No </td>";
		// echo "<td> Nama Surah </td>";
		// echo "<td> Pilihan </td>";
		// echo "</tr>";
		// foreach($pre as $key=>$val){
		// 	$no = 1;
		// 	foreach($val as $k=>$v){ 
		// 		echo "<tr>";
		// 		echo "<td>".$no."</td>";
		// 		echo "<td>".$v->name->transliteration->id."</td>";
		// 		echo "<td> <a href='#' class='btn btn-warning'> Pilih </a> </td>";
		// 		echo "</tr>";  
		// 		$no++; 
		// 	}  
		// }
		// echo "</table>"; 

		$data = $this->ma->fetch_surah();
		echo json_encode($data,TRUE);
	}
 
}
