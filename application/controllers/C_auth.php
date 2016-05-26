<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$data['page_title'] = "Login";

		if ($this->session->has_userdata('username'))
		{
			redirect(site_url('C_admin'));
		}

		$this->load->view('admin/V_login', $data);
	}

	public function login()
	{
		if ($this->session->has_userdata('username'))
		{
			redirect(site_url('C_admin'));
		}

		if ($_SERVER['REQUEST_METHOD'] => 'POST')
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$res = $this->M_user->login($username,$password);

			if (sizeof($res) > 0)
			{
				$session_data = array(
					'username' => $res[0]->username,
					'nama' => $res[0]->nama
					);

				$this->session->set_userdata($session_data);

				// jika yg login bukan admin
				if ('username' != 'admin')
				{
					redirect(site_url('C_user'));
				}

				else
				{
					redirect(site_url('C_admin'));
				}
			}

			else
			{
				redirect(site_url('C_auth'));
			}
		}

		else
		{
			redirect(site_url('C_auth'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('C_auth'));
	}
}