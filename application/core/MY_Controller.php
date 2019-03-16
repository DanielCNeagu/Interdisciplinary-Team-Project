<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    public function set_alert($name, $msg, $type) {
        $this->session->set_flashdata($name, "<div class='notification closeable ".$type."'><b style='text-transform:capitalize'>".$msg."</b><a class='close'></a></div>");
    }
}
