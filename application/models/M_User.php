<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		$query = $this->db->get('user')->result();
		return $query;
	}
	
	public function get($id){
		$this->db->where('id_user',$id);
		$hasil = $this->db->get('user');
		return $hasil->row();
	}

	// public function get_sekolah()
	// {
	// 	$result = $this->db->get('nama_sekolah');

	// 	$dd[''] = 'Please Select';
	// 	if ($result->num_rows() > 0)
	// 	{
	// 		foreach ($result->result => $row) 
	// 		{
	// 			$dd[$row->id_sekolah] = $row->nama_sekolah;
	// 		}
	// 	}
	// 	return $dd;
	}

	public function delete($id){
		$this->db->delete('user',array('id_user'=> $id));
	}

	public function insert_data($data) {
        $this->db->insert('user', $data);
        return true;        
    }

    function update_data($data,$id) {
        $this->db->where('id_user',$id);
        $this->db->update('user', $data);
        return true;        
    }

    function siswaAll(){
    	$this->db->select('*');
        $this->db->from('user u'); 
        $this->db->join('nilai n', 'u.id_user=n.id_user', 'left');      
        $query = $this->db->get(); 
    }
}
