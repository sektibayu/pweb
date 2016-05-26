<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper(array('url','form'));
        // $this->load->library(array('form_validation','pagination'));
	}

	public function login(){
		if ($this->session->has_userdata('id_user')) 
		{
			// echo $this->session->has_userdata('role');
			// if($this->session->has_userdata('role')=='3'){
			// 	redirect(site_url('C_admin'));	
			// }else if($this->session->has_userdata('role')=='2'){
			// 	redirect(site_url('C_siswa'));
			// }else if($this->session->has_userdata('role')=='1'){
			// 	redirect(site_url('C_sekolah'));
			// }else{
			// 	redirect(site_url('Welcome'));
			// }
		}
		if ($_SERVER['REQUEST_METHOD']=='POST'){
			$id_user=$this->input->post('id_user'); 
			$password=$this->input->post('password');
			$res=$this->M_user->login($id_user,$password);
			print_r($res);
			if($res){
				$session_data=array(
					'id_user' => $res->id_user, 
					'nama' => $res->nama,
					'role' => $res->role,
					);
				$this->session->set_userdata($session_data);
				$i= $this->session->userdata('role');
				echo "ini adalah dollar i -> ". $i;
				// if(strcmp($i,'3')==0) echo 'benar';
				// else echo 'salah';
				if($i == '3') echo '...benar';
				else echo '...salah';
				
				if($i == '3'){
					redirect(site_url('C_admin'));	
				}else if($i == '2'){
					redirect(site_url('C_siswa'));
				}else if($i == '1'){
					redirect(site_url('C_sekolah'));
				}else{
					$this->session->sess_destroy();
					redirect(site_url('Welcome'));
				}
			}else{
				redirect(site_url('Welcome'));
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('Welcome'));
	}
}