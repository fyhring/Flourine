<?php
	
	
	Route::get('/', function() {

		$view = new View('welcome', 'empty');
		$view->assign('title', 'Fluorine Framework');
		return $view;
	});

	