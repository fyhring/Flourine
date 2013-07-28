<?php
	
	namespace Model;
	use Database\Table\User;

	class Users extends Model {

		protected $user;

		public function init() {

			$this->user = new User;
		}

		public function getAllUsers() {
			
			return $this->user
						->select()
						->fetch_all();
		}
		
		public function getUser($id) {

			return $this->user
						->find($id)
						->fetch();
		}

	}