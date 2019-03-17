<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {
	
	public function getWhere($data) {
		$this->db->like('question', $data, 'both'); 
		$this->db->or_like('answer', $data, 'both'); 
		$q =  $this->db->get('faq');
		return $q->result();
	}
}