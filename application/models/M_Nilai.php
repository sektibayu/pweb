<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Nilai extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		$query = $this->db->get('nilai')->result();
		return $query;
	}
	
	public function get($id){
		$this->db->where('id_nilai',$id);
		$hasil = $this->db->get('nilai');
		return $hasil->row();
	}

	public function delete($id){
		$this->db->delete('nilai',array('id_nilai'=> $id));
	}

	function insert_data($data) {
        $this->db->insert('nilai', $data);
        return true;        
    }

    function update_data($data,$id) {
        $this->db->where('id_nilai',$id);
        $this->db->update('nilai', $data);
        return true;        
    }

}
