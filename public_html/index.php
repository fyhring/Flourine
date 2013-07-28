<?php
	
	
	session_start();
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	/*************************
	 *                       *
	 *   (C)Copyright 2013   *
	 *     Niels Fyhring     *
	 *                       *
	 *************************/

	$cli = false;

	require_once('../paths.php');

	define('START_TIME', microtime(true));

	require_once(ROOT .'vendor/autoload.php');

	require_once(SYS . 'core.php');
	
	App::boot();

?>