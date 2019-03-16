<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|min_length[5]|max_length[50]|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('includes/header');
			$this->load->view('includes/menu');
			$this->load->view('register_view');
			$this->load->view('includes/footer');
		}
		else
		{
			$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'password' => md5($this->input->post('password')),
				'email' => $this->input->post('email'),
				'user_type' => '2',
				'status' => '1'
			);

			$this->load->model('auth_model');

			if($this->auth_model->register($data) > 0) {
				$this->set_alert('notification', 'Success! You can login now.', 'success');
				redirect('login');
			} else {
				$this->set_alert('notification', 'There was an error while registering your account.', 'error');
				redirect('register');
			}
		}
	}
}
