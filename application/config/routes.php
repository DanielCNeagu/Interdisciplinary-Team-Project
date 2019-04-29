<?php
/*
CodeIgniter code bellow
*/
defined('BASEPATH') OR exit('No direct script access allowed');



/*
We changed code in order to connect home page
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'home';
$route['translate_uri_dashes'] = TRUE;
