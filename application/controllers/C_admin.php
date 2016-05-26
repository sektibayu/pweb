<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
        $this->load->helper(array('url','form'));
        $this->load->library(array('form_validation','pagination'));
	}

	// public function index()
	// {
	// 	$data['page_title'] = "Home PPDB";
	// 	$this->load->view('admin/V_home', $data);
	// }

	public function index()
	{
        // $data['sekolahs']=$this->M_Sekolah->getAll();
        $this->load->view('template/V_header');
        $this->load->view('admin/V_sidebar');
        $this->load->view('admin/V_Index');
        $this->load->view('template/V_footer');
    }

    public function edit()
    {
        $data['nama_users'] = $this->M_user->getAll();
    	$this->load->view('template/V_header');
        $this->load->view('admin/V_sidebar');
        $this->load->view('admin/V_edit',$data);
        $this->load->view('template/V_footer');	
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->M_user->delete($id);
        redirect('C_admin/edit');
    }

    public function update2()
    {
        $id = $this->uri->segment(3);
        $data['user']=$this->M_user->get($id);
        $this->load->view('template/V_header');
        $this->load->view('admin/V_sidebar');
        $this->load->view('admin/V_edit_data',$data);
        $this->load->view('template/V_footer'); 
    }

    public function update()
    {
        $id = $this->uri->segment(3);
        $data = array(
            // 'id_user' => $this->input->post('id_user'),
            // 'password' => $this->input->post('password'),
            // 'nama' => $this->input->post('nama'),
            'rule' => $this->input->post('rule')
            // 'alamat' => $this->input->post('alamat')
            );
        $this->M_user->update_data($data,$id); 
        redirect('C_admin/edit');
    }

    public function jadwal_pendaftaran()
    {
    	$this->load->view('template/V_header');
        $this->load->view('admin/V_sidebar');
        $this->load->view('admin/V_jadwal_pendaftaran');
        $this->load->view('template/V_footer');	
    }

    public function jadwal_pengumuman()
    {
    	$this->load->view('template/V_header');
        $this->load->view('admin/V_sidebar');
        $this->load->view('admin/V_jadwal_pengumuman');
        $this->load->view('template/V_footer');	
    }

    public function asli()
    {
        $this->load->view('template/V_header');
        $this->load->view('admin/V_sidebar');
        $this->load->view('admin/V_asli');
        $this->load->view('template/V_footer'); 
    }
}
