<?php
	
	define('EXT', 'php');

	$root = ($cli) ? './' : '../';
	define('ROOT', $root);
	
	define('SYS', ROOT .'vendor/fluorine-framework/framework/src/');
	define('APP', ROOT .'app/');
	define('PUBLIC_DIR', ROOT .'public_html/');
	define('COMPONENTS', SYS .'components/');

	
?>