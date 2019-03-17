<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller {

	public function index()
	{
		$this->set_alert('notification', 'Logged out successfully...', 'success');
		$user_data = $this->session->userdata();
		foreach ($user_data as $key => $value) {
			if ($key!='__ci_last_regenerate' && $key != '__ci_vars')
			$this->session->unset_userdata($key);
		}
		$this->set_alert('notification', 'Logged out successfully...', 'success');
		redirect('login');
	}

}
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller {

	public function index()
	{
		$this->session->sess_destroy();
		$this->set_alert('notification', 'Logged out successfully...', 'success');
		redirect('login');
	}

}
>>>>>>> FirstB
