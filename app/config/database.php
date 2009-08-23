<?php
class DATABASE_CONFIG {

	var $test = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => '192.168.144.45',
		'login' => 'root',
		'password' => '',
		'database' => 'driving',
		'encoding' => 'UTF-8'
	);
	
	// Local DB
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'port' => '8889',
		'password' => 'root',
		'database' => 'theory_test',
		'encoding' => 'UTF-8'
	);
}

?>