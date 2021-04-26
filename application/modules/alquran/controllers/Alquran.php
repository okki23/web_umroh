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

	public function recite_quran()
	{   
		$id = $this->uri->segment(3);
		$get_surah = file_get_contents("https://api.quran.sutanlab.id/surah/".$id);
		//echo $get_surah;

		$pre = json_decode($get_surah);
		$total_ayat = $pre->data->numberOfVerses; 
		echo "<div class='container'>";
		echo "<div class='col-lg-12'>";
		echo "Surah ".$pre->data->name->transliteration->id;
		echo "<br>";
		echo "Surah ke".$pre->data->number;
		// echo $pre->data->tafsir; 
		echo "<br>";
		echo $pre->data->numberOfVerses." Ayat";
		echo "<br>";
		echo $pre->data->tafsir->id;
		echo "<br>";
		echo $pre->data->preBismillah->text->arab;
		echo "<br>";
		echo $pre->data->preBismillah->translation->id;
		echo "<br>";
		echo "<hr>";
		echo "<br>";
		foreach($pre->data->verses as $val){
			echo "<div align='right'>";
			echo "<br>";
			echo "<div style='font-size:36px;'>" .$val->number->inSurah. " " .$val->text->arab." ".$val->number->inSurah."</div>";
			echo "<br>"; 
			echo $val->translation->id;
			echo "<br>"; 
			echo "</div>";
		}
		echo "</div>";
		echo "</div>";
	}
 
}
