<?php
/*
CodeIgniter code bellow
*/

defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
	'dsn'	=> '',



	
/*
We changed code in order to connect to database
*/
	'hostname' => 'den1.mysql2.gear.host',
	'username' => 'epit',
	'password' => 'epit!!',
	'database' => 'epit',







/*
CodeIgniter code bellow
*/
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
