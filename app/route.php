<?php
	
	
	Route::get('/', function() {
		return "Hello World!";
	});

	Route::get('users', 'user@index');