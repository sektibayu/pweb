<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sekolah extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Sekolah');
        $this->load->model('M_User');
        $this->load->helper(array('url','form'));
        // $this->load->library(array('form_validation','pagination'));
    }

    public function index(){
        // $data['sekolahs']=$this->M_Sekolah->getAll();
        $this->load->view('template/V_header');
        $this->load->view('sekolah/V_sidebar');
        // $this->load->view('siswa/V_Index');
        $this->load->view('template/V_footer');
    }

    public function verifikasi(){
    	$data['siswas']=$this->M_User->siswaAll();
    	$this->load->view('template/V_header');
        $this->load->view('sekolah/V_sidebar');
        $this->load->view('sekolah/V_verifikasi',$data);
        $this->load->view('template/V_footer');
    }

    public function input_nilai(){
    	$this->load->view('template/V_header');
        $this->load->view('sekolah/V_sidebar');
        // $this->load->view('siswa/V_input_nilai');
        $this->load->view('template/V_footer');
    }
    public function pengumuman(){
		$this->load->view('template/V_header');
        $this->load->view('sekolah/V_sidebar');
        // $this->load->view('siswa/V_pengumuman');
        $this->load->view('template/V_footer');
    }
}