<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    
	    if($this->session->userdata('is_logged_in')!=true) {
			$this->set_alert('notification', 'You must log in first...', 'error');
	    	redirect('login');
	    }
	    $this->load->model('chat_model');
	}

	public function index()
	{
		$data['tickets'] = $this->chat_model->getTickes(array('status' => '3'));
		$data['type'] = "Completed";
		$this->load->view('includes/dashboard/header');
		$this->load->view('includes/dashboard/menu');
		$this->load->view('tickets_view', $data);
		$this->load->view('includes/dashboard/footer');
	}

	public function active()
	{
		$data['tickets'] = $this->chat_model->getTickes(array('status' => '2'));
		$data['type'] = "Active";
		$this->load->view('includes/dashboard/header');
		$this->load->view('includes/dashboard/menu');
		$this->load->view('tickets_view', $data);
		$this->load->view('includes/dashboard/footer');
	}

	public function pending()
	{
		$data['tickets'] = $this->chat_model->getTickes(array('status' => '1'));
		$data['type'] = "Pending";
		$this->load->view('includes/dashboard/header');
		$this->load->view('includes/dashboard/menu');
		$this->load->view('tickets_view', $data);
		$this->load->view('includes/dashboard/footer');
	}
}
