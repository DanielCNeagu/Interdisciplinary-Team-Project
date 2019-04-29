<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends MY_Controller {

	public function __construct()
	{
	    parent::__construct();
	    
	    // if($this->session->userdata('is_logged_in')!=false) {
			// $this->set_alert('notification', 'You must log in first...', 'error');
	    // 	redirect('login');
	    // }
	    $this->load->model('chat_model');
	}

	public function index()
	{		
		if($this->input->post('question') && !empty($this->input->post('question'))) {
			$id = $this->chat_model->addQuery(array(
				'created_by' => $this->session->userdata('user_id'), 
				'query' => $this->input->post('question')
				));
			if($id > 0) { 
				redirect('chat/view/' . $id);
			}
		}
		$this->set_alert('notification', 'Invalid selection...', 'error');
	    redirect('tickets');
	}

	public function add($id = NULL) 
	{
		if($id==NULL) {
			$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('tickets');
	    }
	    $data = array(
	    	'msg' => $this->input->post('msg'), 
	    	'ticket_id' => $id,
	    	'created_by' => $this->session->userdata('user_id')
	    );

	    if($this->chat_model->addChat($data) > 0) {
			// $this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('chat/view/' . $id);	    	
	    } else {
			$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('chat/view/' . $id);
	    }
	}

	public function view($id = NULL) 
	{
		if($id==NULL) {
			$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('tickets');
	    }
	    $data['query'] = $this->chat_model->getQuery(array(
				'id' => $id
				));
	    // print_r($data['query']);
	    // exit();
	    if(empty($data['query']) || (is_array($data['query']) && count($data['query']) < 1)) {
	    	$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('tickets');
	    }
	    $data['chat'] = $this->chat_model->getChat($id);
		if($this->session->userdata('user_type') < 2){
			$this->load->view('includes/dashboard/header');
			$this->load->view('includes/dashboard/menu');
			$this->load->view('chat_view', $data);

		}else{
			$this->load->view('includes/header');
			$this->load->view('includes/menu');
			$this->load->view('customer_view');
			$this->load->view('chat_view', $data);
			$this->load->view('includes/dashboard/footer');


		}
	}

	public function close_project($id = NULL) 
	{
		if($id==NULL) {
			$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('tickets');
	    }


		if($this->chat_model->close_project($id)) {
			$this->set_alert('notification', 'Ticket has been closed...', 'success');
	    	redirect('chat/view/' . $id);
	    } else {
			$this->set_alert('notification', 'Unable to close the ticket...', 'error');
	    	redirect('chat/view/' . $id);
	    }
	}

	public function check()
	{
		$id = $this->input->post('ticket_id');

		$chat = $this->chat_model->getChat($id);

		$msgs = "";

		if(count($chat) > 0) {
		foreach ($chat as $c) {
		$msgs .= "<div class='message-bubble ";
		$msgs .= ($c->created_by == $this->session->userdata('user_id')) ? 'me' : '';
		$msgs .= "'>
			<div class='message-bubble-inner'>
				<div class='message-text'><p>" . $c->msg . "</p></div>
			</div>
		</div>
		<div class='clearfix'></div>";
		}
		}

		echo $msgs;
	}	

	public function feedback($id = NULL) 
	{
		if($id==NULL) {
			$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('tickets');
	    }
	    $data = array(
	    	'review' => $this->input->post('feedback')
	    );

	    if($this->chat_model->addFeedback($id, $data) > 0) {
			// $this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('chat/view/' . $id);	    	
	    } else {
			$this->set_alert('notification', 'Invalid selection...', 'error');
	    	redirect('chat/view/' . $id);
	    }
	}
}
