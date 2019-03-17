<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function index()
	{
		$this->load->view('includes/dashboard/header');
		$this->load->view('includes/dashboard/menu');
		$this->load->view('dashboard_view');
		$this->load->view('includes/dashboard/footer');
	}
}
=======
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
			$data['active'] = $this->auth_model->getData('select count(*) as count from tickets where status = 2')[0];
			// print_r($data['active']);
			$data['pending'] = $this->auth_model->getData('select count(*) as count from tickets where status = 1')[0];
			// print_r($data['pending']);
			$data['completed'] = $this->auth_model->getData('select count(*) as count from tickets where status = 3')[0];
			// print_r($data['completed']);
		} else {
			$data['active'] = $this->auth_model->getData('select count(*) as count from tickets where status = 2 AND created_by = ' . $this->session->userdata('user_id'))[0];
			// print_r($data['active']);
			$data['pending'] = $this->auth_model->getData('select count(*) as count from tickets where status = 1 AND created_by = ' . $this->session->userdata('user_id'))[0];
			// print_r($data['pending']);
			$data['completed'] = $this->auth_model->getData('select count(*) as count from tickets where status = 3 AND created_by = ' . $this->session->userdata('user_id'))[0];
			// print_r($data['completed']);
		}

		$this->load->view('includes/dashboard/header');
		$this->load->view('includes/dashboard/menu');
		$this->load->view('dashboard_view', $data);
		$this->load->view('includes/dashboard/footer');
	}
}
>>>>>>> FirstB
