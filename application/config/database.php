<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
<<<<<<< HEAD
	'username' => 'root',
	'password' => 'Rica8442',
=======
	'username' => 'root',
	'password' => '',
<<<<<<< HEAD
	'database' => 'fyp',
=======
>>>>>>> bb335b11368faccdd84be5a7a6b599168c508c57
	'database' => 'mario',
>>>>>>> FirstB
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
