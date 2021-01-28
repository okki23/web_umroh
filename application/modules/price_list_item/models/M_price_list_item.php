<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_price_list_item extends Parent_Model { 
   
  var $nama_tabel = 'm_pricelist_item';
  var $daftar_field = array('id','id_kategori','item','satuan','harga_satuan','foto');
  var $primary_key = 'id';

	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  public function fetch_price_list_item(){
       $sql = "select a.*,b.deskripsi as kategori from m_pricelist_item a left join m_cat_pricelist b on b.id = a.id_kategori";   
		   $getdata = $this->db->query($sql)->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();   
                $sub_array[] = $row->kategori;   
			          $sub_array[] = $row->item;   
                $sub_array[] = $row->satuan;  
                $sub_array[] = "Rp. ".number_format($row->harga_satuan,0);  
			  
         
			    $sub_array[] = '<a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" id="detail" onclick="Show_Detail('.$row->id.');" > <i class="material-icons">aspect_ratio</i> Detail </a> 
								&nbsp; <a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="material-icons">create</i> Ubah </a> 
								&nbsp; <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-xs waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="material-icons">delete</i> Hapus </a>';  
               
                $data[] = $sub_array;  
                 $no++;
           }  
          
		   return $output = array("data"=>$data);
		    
    }


 public function fetch_price_list_item_front(){
       $sql = "select a.*,b.deskripsi as kategori from m_pricelist_item a left join m_cat_pricelist b on b.id = a.id_kategori";   
       $getdata = $this->db->query($sql)->result();
       $data = array();  
       $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = $no;
                $sub_array[] = $row->kategori;   
                $sub_array[] = $row->item;   
                $sub_array[] = $row->satuan;  
                $sub_array[] = "Rp. ".number_format($row->harga_satuan,0);  
        
         
          $sub_array[] = '<a href="javascript:void(0)" class="btn btn-primary btn-xs" id="detail" onclick="Show_Detail('.$row->id.');" >  Detail </a>';  
               
                $data[] = $sub_array;  
                 $no++;
           }  
          
       return $output = array("data"=>$data);
        
    }

    public function fetch_cat_pricelist(){   
       $getdata = $this->db->get('m_cat_pricelist')->result();
       $data = array();  
       $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = $no;
                $sub_array[] = $row->deskripsi;   
                $sub_array[] = $row->id;   
                
                $data[] = $sub_array;  
                 $no++;
           }  
          
       return $output = array("data"=>$data);
        
    }

  
  
	 
 
}
