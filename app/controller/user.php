<?php
	

	class User_Controller extends Base_Controller {
		
		
		public function index() {

			$model = Load::model('users');
			$users = $model->getAllUsers();

			$view = new View('users');
			$view->assign('users', $users);

			return $view;

		}


	}