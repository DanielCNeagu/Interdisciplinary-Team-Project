<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_model extends CI_Model {
	
	// public function add($data)
	// {
	// 	$this->db->insert('chat',$data);
	// 	return $this->db->insert_id();
	// }
	
	public function addQuery($data)
	{
		$this->db->insert('tickets',$data);
		return $this->db->insert_id();
	}

	public function getQuery($where) {
		$this->db->where($where);	
		$q =  $this->db->get('tickets');
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

	public function getChat($id) {
		$this->db->where('ticket_id', $id);
		$q =  $this->db->get('chat');
		return $q->result();
	}

	public function getTickes($data) {
		$this->db->where($data);
		$q =  $this->db->get('tickets');
		return $q->result();
	}

	public function close_project($id) 
	{
		$this->db->where('id', $id);
		if ($this->db->update('tickets', array('status' => '3'))) {
			return true;
		}
		return false;
	}

	public function addChat($data) 
	{
		$this->db->insert('chat',$data);
		return $this->db->insert_id();
	}

	public function addFeedback($id, $data)
	{
		$this->db->where('id', $id);
		if ($this->db->update('tickets', $data)) {
			return true;
		}
		return false;
	}
}