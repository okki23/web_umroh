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
		echo "<div align='center' style='font-weight:bold';>";
		echo "Surah ".$pre->data->name->transliteration->id;
		echo "<br>";
		echo "Surah ke".$pre->data->number;
		// echo $pre->data->tafsir; 
		echo "<br>";
		echo $pre->data->numberOfVerses." Ayat";
		echo "</div>";
		echo "<div align='justify' style='font-weight:bold';>";
		echo "<br>";
		echo $pre->data->tafsir->id;
		echo "<br>";
		echo "</div>";
		echo $pre->data->preBismillah->text->arab;
		echo "<br>";
		echo $pre->data->preBismillah->translation->id;
		 
		echo "<br>";
		echo "<table> 
				<thead align='center'> 
					<th> Surah </th>
					<th> Ayat </th>
				</thead>
				<tbody>";
					foreach($pre->data->verses as $val){
						echo "<tr style='font-size:26px;'>
								<td align='right'>".$val->text->arab." <br> ".$val->translation->id." </td>
								<td align='center'>".$val->number->inSurah." </td>
							  </tr>";

						// echo "<div align='right'>";
						// echo "<br>";
						// echo "<div style='font-size:36px;'>".$val->text->arab."</div>";
						// echo "<br>"; 
						// echo $val->translation->id;
						// echo "<br>"; 
						// echo "</div>";
					}
				echo "</tbody>";
		echo "</div>";
		echo "</div>";
	}
 
}
