<?php
/*
CodeIgniter code
*/


defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    
/*
The Session class permits you maintain a error “state” browsing the site.
    https://www.codeigniter.com/user_guide/libraries/sessions.html
*/
    public function set_alert($name, $msg, $type) {
        $this->session->set_flashdata($name, "<div class='notification closeable ".$type."'><b style='text-transform:capitalize'>".$msg."</b><a class='close'></a></div>");
    }
}
