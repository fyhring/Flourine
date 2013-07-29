<?php
	
	define('EXT', 'php');

	$root = ($cli) ? './' : '../';
	define('ROOT', $root);
	
	define('SYS', ROOT .'vendor/fluorine-framework/framework/src/');
	define('COMPONENTS', SYS .'components/');
	define('PUBLIC_DIR', ROOT .'public_html/');
	define('APP', ROOT .'app/');
	define('U_COMPONENTS', APP .'components/');

	
?>