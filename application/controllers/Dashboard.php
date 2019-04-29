<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
	    parent::__construct();
	    
	    if($this->session->userdata('is_logged_in')!=true) {
			$this->set_alert('notification', 'You must log in first...', 'error');
	    	redirect('login');
	    }

	    $this->load->model('auth_model');
	}

	public function index()
	{
		if($this->session->userdata('user_type') < 2) {
			//Customer Data
			$data['active'] = $this->auth_model->getData('select count(*) as count from tickets where status = 2')[0];
			$data['pending'] = $this->auth_model->getData('select count(*) as count from tickets where status = 1')[0];
			$data['completed'] = $this->auth_model->getData('select count(*) as count from tickets where status = 3')[0];
		} else {
			//Admin Data
			$data['active'] = $this->auth_model->getData('select count(*) as count from tickets where status = 2 AND created_by = ' . $this->session->userdata('user_id'))[0];
			$data['pending'] = $this->auth_model->getData('select count(*) as count from tickets where status = 1 AND created_by = ' . $this->session->userdata('user_id'))[0];
			$data['completed'] = $this->auth_model->getData('select count(*) as count from tickets where status = 3 AND created_by = ' . $this->session->userdata('user_id'))[0];		
		}

		if($this->session->userdata('user_type') < 2) {
			//Admin view			
			$this->load->view('includes/dashboard/header');						
			$this->load->view('includes/dashboard/menu');
			$this->load->view('dashboard_view', $data);
			$this->load->view('faq/add', $data);				
		} else {
			//Customer view
			$this->load->view('includes/header');
			$this->load->view('includes/menu');
			$this->load->view('customer_view');
			$this->load->view('includes/banner');
			$this->load->view('includes/dashboard/footer');
		}
	}
}
