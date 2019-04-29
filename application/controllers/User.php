<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    echo $this->session->userdata('is_logged_in');
	    if($this->session->userdata('is_logged_in')!=true && $this->session->userdata('user_type') < 2) {
			$this->set_alert('notification', 'You must log in as admin first...', 'error');
	    	redirect('login');
	    }
		
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['users'] = $this->user_model->getAll(array( 
			
		));
		
		if($this->session->userdata('user_type') < 2){

			$this->load->view('includes/dashboard/header');
			$this->load->view('includes/dashboard/menu');
			$this->load->view('faq/view_accounts', $data);
		}else{
			$this->set_alert('notification', 'You must log in as admin first...', 'error');
		}

		
	}	

	public function update($id = NULL)
	{
		if($id==NULL) {
			$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('faq/view_accounts');
	    }

		$this->form_validation->set_rules('user_type', 'user_type', 'trim|required|min_length[1]|max_length[1]');

		if ($this->form_validation->run() == FALSE)
		{
			$data['users'] = $this->user_model->getSingle($id);
			$this->load->view('includes/dashboard/header');
			$this->load->view('includes/dashboard/menu');
			$this->load->view('faq/accounts', $data);
		}
		else
		{
			$data = array(
				'user_type' => $this->input->post('user_type')
			);

			if($this->user_model->update($data, array('id' => $id))) {
				$this->set_alert('notification', 'Question has been updated.', 'success');
				redirect('faq');			
			} else {
				$this->set_alert('notification', 'Unable to update the question.', 'error');
				redirect('faq');
			}
		}	
	}

	public function delete($id = NULL)
	{
		if($id==NULL) {
			$this->set_alert('notification', 'No account found', 'error');
			redirect('faq/view_accounts');
			
			$this->load->view('includes/dashboard/footer');
	    }

		if($this->user_model->delete($id)) {
			redirect('faq/view');		
		} else {
			redirect('faq/view');
		}
		
	}
}
