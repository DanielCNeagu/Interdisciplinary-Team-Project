<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MY_Controller {

	public function __construct()
	{
	    parent::__construct();
	    echo $this->session->userdata('is_logged_in');
	    if($this->session->userdata('is_logged_in')!=true) {
			$this->set_alert('notification', 'You must log in first...', 'error');
	    	redirect('login');
	    }
		
		$this->load->model('faq_model');
	}

	public function index()
	{
		$data['faqs'] = $this->faq_model->getAll();
		

		if($this->session->userdata('user_type') < 2){

			$this->load->view('includes/dashboard/header');
			$this->load->view('includes/dashboard/menu');
			$this->load->view('faq/view', $data);
			$this->load->view('faq/add');
		}else{

			$this->load->view('includes/header');
			$this->load->view('includes/menu');
			$this->load->view('customer_view');
			$this->load->view('faq/view', $data);
			$this->load->view('includes/dashboard/footer');

		}

		
	}

	public function add()
	{
		$this->form_validation->set_rules('question', 'Question', 'trim|required|min_length[10]|max_length[500]');
		$this->form_validation->set_rules('answer', 'Solution', 'trim|required|min_length[10]|max_length[5000]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('includes/dashboard/header');
			$this->load->view('includes/dashboard/menu');
			$this->load->view('faq/add');
			
		}
		else
		{
			$data = array(
				'question' => $this->input->post('question'),
				'answer' => $this->input->post('answer')
			);

			$result = $this->faq_model->add($data);

			if($result > 0) {
				$this->set_alert('notification', 'Question has been added.', 'success');
				redirect('faq');			
			} else {
				$this->set_alert('notification', 'Unable to add the question.', 'error');
				redirect('faq');
			}
		}	
	}

	public function update($id = NULL)
	{
		if($id==NULL) {
			$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('faq');
	    }

		$this->form_validation->set_rules('question', 'Question', 'trim|required|min_length[10]|max_length[500]');
		$this->form_validation->set_rules('answer', 'Solution', 'trim|required|min_length[10]|max_length[5000]');

		if ($this->form_validation->run() == FALSE)
		{
			$data['faq'] = $this->faq_model->getSingle($id);
			$this->load->view('includes/dashboard/header');
			$this->load->view('includes/dashboard/menu');
			$this->load->view('faq/update', $data);
		}
		else
		{
			$data = array(
				'question' => $this->input->post('question'),
				'answer' => $this->input->post('answer')
			);

			if($this->faq_model->update($data, array('id' => $id))) {
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
			$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('faq');
	    }

		if($this->faq_model->delete($id)) {
			$this->set_alert('notification', 'Question has been deleted.', 'success');
			redirect('faq');			
		} else {
			$this->set_alert('notification', 'Unable to delete the question.', 'error');
			redirect('faq');
		}
		
	}
}
