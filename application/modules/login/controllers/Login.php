<?php
/**
 * author : Okki Setyawan
 * umrohku team
 * copyright PT.Panorama Nur Mecca 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public $tablename  = 'umrohku_users';
	public $primary_key = 'id';
	 
	public function index()
	{
		$this->load->view('login/view_login');
	}

	public function authentication(){
		$username = $this->input->post('username');
		$password = base64_encode($this->input->post('password'));   
		$auth = $this->db->get_where($this->tablename,array('username'=>$username,'password'=>$password));  

		//if available
		if($auth->num_rows() > 0){
			$session = $auth->row();
			 
			if($auth->num_rows() > 0){
				$this->session->set_userdata(array('username'=>$session->username,'session_id'=>$session->id));
				echo "<script language=javascript>
				alert('Authentikasi Berhasil!');
				window.location='" . base_url('dashboard') . "';
				</script>";
			}else{
				echo "<script language=javascript>
				alert('Akun yang anda masukkan tidak tersedia, Periksa kembali!');
				window.location='" . base_url('login') . "';
				</script>";
			} 

		}else{
			redirect(base_url('login'));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		echo "<script language=javascript>
             alert('Anda telah keluar dari sistem ');
             window.location='" . base_url('login') . "';
             </script>";
		 
	}
}
