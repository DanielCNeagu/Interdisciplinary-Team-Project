<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	
	public function register($data)
	{
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}

	public function login($data) {
		$this->db->where($data);		
		$result = $this->db->get('users');
		if ($result->num_rows() == 1) {			
			$data = $result->row(0);
			return $data;
		} else {
			return false;
		} 
	}

    public function getData($query) {		
        $q = $this->db->query($query);
		return $q->result();
	}
}