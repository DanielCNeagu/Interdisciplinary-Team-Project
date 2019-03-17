<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_model extends CI_Model {
	
	public function add($data)
	{
		$this->db->insert('faq',$data);
		return $this->db->insert_id();
	}

	public function getSingle($id) {
		$this->db->where('id', $id);	
		$q =  $this->db->get('faq');
		if($q->result()) {
			return $q->result()[0];
		}
		return array();
	}

	public function getWhere($data) {
		$this->db->where($data);
		$q =  $this->db->get('faq');
		return $q->result();
	}

	public function getAll() {
		$q =  $this->db->get('faq');
		return $q->result();
	}

	public function update($data,$where) {
		$this->db->where($where);
		if ($this->db->update('faq', $data)) {
			return true;
		}
		return false;
	}

	public function delete($id) {
		$this->db->where('id', $id);
   		if($this->db->delete('faq')) {
   			return true;
   		} 
   		return false;
	}
}