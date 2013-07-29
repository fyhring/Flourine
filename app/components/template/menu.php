<?php
	

	namespace Template;

	class Menu {

		private static $menus = array();
		private static $items;

		/**
		 * Register a new menu.
		 * @param 	string 	$name
		 * @return 	void
		 */
		public static function register($name) {

			if(! in_array($name, static::$menus)) static::$menus[] = $name;
		}

		/**
		 * Register a new item to a specific menu.
		 * If the menu doesn't exists, create it.
		 * @param 	string 	$menu
		 * @param 	string 	$title
		 * @param 	string 	$url
		 * @param 	array 	$attr 	optional
		 * @return 	void
		 */
		public static function addItem($menu, $title, $url, $attr=array()) {

			if(!in_array($menu, static::$menus)) static::register($menu);

			static::$items[$menu][] = (object) array('title' => $title, 'url' => $url, 'attr' => $attr);
		}

		/**
		 * Returns all items for a specific menu.
		 * @return 	array
		 */
		public static function getItems($menu) {

			if(!isset(static::$items[$menu])) return array();
			return static::$items[$menu];
		}

	}
	