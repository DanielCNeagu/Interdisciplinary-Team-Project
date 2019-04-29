<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller {

	public function index()
	{
		$this->session->sess_destroy();
		$this->set_alert('notification', 'Logged out successfully...', 'success');
		redirect('home_view');
	}

}
