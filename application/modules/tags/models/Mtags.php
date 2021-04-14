<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtags extends CI_Model {
	
	public $tablename  = 'umrohku_article_tags';
	public $primary_key = 'id';
 
	public function index()
	{
		echo 1;
	}

	public function fetch_tags(){
      
		$getdata = $this->db->get($this->tablename)->result();
		$data = array();  
	   
			foreach($getdata as $row)  
			{  
				 $sub_array = array();   
				 $sub_array[] = $row->tags;   
				 $sub_array[] = '<a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="material-icons">create</i> Ubah </a>  &nbsp; <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-xs waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="material-icons">delete</i> Hapus </a>';  
				 $sub_array[] =  $row->id;
				 $data[] = $sub_array;  
			   
			}  
		   
		return $output = array("data"=>$data);
		 
   } 
   
}
