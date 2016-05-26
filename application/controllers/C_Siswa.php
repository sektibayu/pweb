<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Sekolah');

        $this->load->helper(array('url','form','form_helper'));
        $this->load->library(array('form_validation','pagination'));

        $this->load->helper(array('url','form'));

    }

    public function index(){
        // $data['sekolahs']=$this->M_Sekolah->getAll();
        $this->load->view('template/V_header');
        $this->load->view('siswa/V_sidebar');
        $this->load->view('siswa/V_Index');
        $this->load->view('template/V_footer');
    }

    public function pendaftaran()
    {
        

        $this->load->view('template/V_header');
        $this->load->view('siswa/V_sidebar');
        $this->load->view('siswa/V_daftar');
        $this->load->view('template/V_footer');   
    }

    public function pengumuman()
    {
        $this->load->view('template/V_header');
        $this->load->view('siswa/V_sidebar');
        $this->load->view('siswa/V_pengumuman');
        $this->load->view('template/V_footer');
    }

    public function cetak_daftar(){

    }
}