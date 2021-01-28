<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cat_pricelist extends Parent_Controller {
 
  
  var $nama_tabel = 'm_cat_pricelist';
  var $daftar_field = array('id','deskripsi','user_insert','date_insert','user_update','date_update');
  var $primary_key = 'id';
  
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_cat_pricelist'); 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('login') . "';
				 </script>";
		}
 	}
   
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['konten'] = 'cat_pricelist/cat_pricelist_view';
		$this->load->view('template_view',$data);		
   
	}
 
 	public function fetch_cat_pricelist(){  
       $getdata = $this->m_cat_pricelist->fetch_cat_pricelist();
       echo json_encode($getdata);   
  	}  
	 
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$get = $this->db->where($this->primary_key,$id)->get($this->nama_tabel)->row();
		echo json_encode($get,TRUE);
	}
	
 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
     
    $sqlhapus = $this->m_cat_pricelist->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	
  
	public function simpan_data(){
    
    
    $data_form = $this->m_cat_pricelist->array_from_post($this->daftar_field);

    $id = isset($data_form['id']) ? $data_form['id'] : NULL; 
 

    $simpan_data = $this->m_cat_pricelist->simpan_data_master($data_form,$this->nama_tabel,$this->primary_key,$id);
   
	
		if($simpan_data){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	}
	 


}
