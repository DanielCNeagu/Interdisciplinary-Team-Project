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
