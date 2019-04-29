<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	

	public function add($data)
	{
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}

	 public function getSingle($id) {
		$this->db->where('id', $id);	
		$q =  $this->db->get('users');
		if($q->result()) {
			return $q->result()[0];
		}
		return array();
	}

	public function getWhere($data) {
		$this->db->where($data);
		$q =  $this->db->get('users');
		return $q->result();
	}

	public function getAll() {
		$q =  $this->db->get('users');
		return $q->result();
	}

	public function update($data,$where) {
		$this->db->where($where);
		if ($this->db->update('users', $data)) {
			return true;
		}
		return false;
	}

	public function delete($id) {
		$this->db->where('id', $id);
   		if($this->db->delete('users')) {
   			return true;
   		} 
   		return false;
	}
}