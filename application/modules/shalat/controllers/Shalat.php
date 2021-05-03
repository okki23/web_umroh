<?php
error_reporting(0);
/**
 * author : Okki Setyawan
 * umrohku team
 * copyright PT.Panorama Nur Mecca 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Shalat extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('shalat/mshalat','ms');
	}

	public function index()
	{
		$this->load->view('shalat/view_shalat');
	}

	public function get_prayer_time()
	{  
		$data = $this->ma->fetch_prayer();
		echo json_encode($data,TRUE);
	}

	public function recite_quran()
	{   
		$id = $this->uri->segment(3);
		$get_prayer = file_get_contents("https://api.quran.sutanlab.id/prayer/".$id);
		//echo $get_prayer;

		$pre = json_decode($get_prayer);
		$total_ayat = $pre->data->numberOfVerses; 
	
		echo "<div class='container'>";
		echo "<div class='col-lg-12'>";
		echo "<div align='center' style='font-weight:bold';>";
		echo "prayer ".$pre->data->name->transliteration->id;
		echo "<br>";
		echo "prayer ke".$pre->data->number;
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
					<th> prayer </th>
					<th> Ayat </th>
				</thead>
				<tbody>";
					foreach($pre->data->verses as $val){
						echo "<tr style='font-size:26px;'>
								<td align='right'>".$val->text->arab." <br> ".$val->translation->id." </td>
								<td align='center'>".$val->number->inprayer." </td>
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
