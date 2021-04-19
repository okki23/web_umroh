<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Malquran extends CI_Model {
	
 
 
	public function index()
	{
		echo 1;
	}

	public function fetch_surah(){
      
		$data = file_get_contents("https://api.quran.sutanlab.id/surah");
		$pre = json_decode($data); 
	
		$data = array();  
	   
		foreach($pre as $key=>$val){
			$no = 1;
			foreach($val as $k=>$v){ 
				$sub_array = array();   
				$sub_array[] = $no;
				$sub_array[] = $v->name->transliteration->id;   
				$sub_array[] = '<a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="pilih" onclick="Pilih('.$v->number.');" >  Pilih </a>';  
				$data[] = $sub_array;  
				$no++; 
			}  
		}
 
		return $output = array("data"=>$data);
		 
   } 
   
}
