<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MY_Controller {

	public function __construct()
	{
	    parent::__construct();
	    
	    if($this->session->userdata('is_logged_in')!=true) {
			$this->set_alert('notification', 'You must log in first...', 'error');
	    	redirect('login');
	    }
	    $this->load->model('search_model');
	}

	public function index()
	{
		if($this->input->get('keyword') && !empty($this->input->get('keyword'))) {
			$data['result'] = $this->search_model->getWhere($this->input->get('keyword'));
		} else {
			$data['result'] = array();
		}

		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('customer_view');
		$this->load->view('search_view', $data);
		$this->load->view('includes/dashboard/footer');
	}
}
