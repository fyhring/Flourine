<?php
	
	namespace Database\Table;
	use Component\Nitrogen;

	class User extends Nitrogen implements Table {

		protected $table = 'users';

		/*
		 * Contains an array of fields that cannot be shown. 
		 */
		public function hidden() {
			return array(
				'pass',
			);
		}

	}
