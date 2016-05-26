<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sekolah extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		$query = $this->db->get('sekolah')->result();
		// print_r($query);
		return $query;
	}
	
	public function get($id){
		$this->db->where('id_sekolah',$id);
		$hasil = $this->db->get('sekolah');
		return $hasil->row();
	}

	public function delete($id){
		$this->db->delete('sekolah',array('id_sekolah'=> $id));
	}

	function insert_data($data) {
        $this->db->insert('sekolah', $data);
        return true;        
    }

    function update_data($data,$id) {
        $this->db->where('id_sekolah',$id);
        $this->db->update('sekolah', $data);
        return true;        
    }

}
