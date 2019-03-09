<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[15]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('includes/header');
			$this->load->view('includes/menu');
			$this->load->view('login_view');
			$this->load->view('includes/footer');
		}
		else
		{
			$where = array(
				'password' => md5($this->input->post('password')),
				'email' => $this->input->post('email'),
				'status' => '1'
			);

			$this->load->model('auth_model');

			$result = $this->auth_model->login($where);

			if($result != false) {
				$data = array(
					'is_logged_in' => 'true',
					'user_id' => $result->id,
					'fname' => $result->fname,
					'lname' => $result->lname,
					'email' => $result->email,
					'user_type' => $result->user_type
				);
				$this->session->set_userdata($data);
				$this->set_alert('notification', 'Welcome! ' . $result->fname . " " . $result->lname . ".", 'success');
				redirect('dashboard');			
			} else {
				$this->set_alert('notification', 'Login credentials are incorrect.', 'error');
				redirect('login');
			}
		}	
	}
}
