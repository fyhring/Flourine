<?php
	
	
	namespace Template\Model;
	use Template\Menu;
	use Model\Model;
	use Component\Url;
 	

 	/**
 	 * This class is a model to templating.
 	 * You can easly create new components for the 
 	 * class, by using the cli program. 
 	 * See docs for more info.
 	 */
	class Template {

		/**
		 * This method registers menus and its items.
		 * Feel free to add what you'll need to 
		 * make your template complete.
		 *
		 * @return 	void
		 */
		public function __construct() {

			// Class Menu is loaded from user components folder.
			Menu::addItem('main', 'Home', Url::base() .'/');
			Menu::addItem('main', 'Users', Url::base() .'/users');

		}

		/**
		 * Returns a html dump of a rendered menu.
		 * @param 	string 		$menu
		 * @param 	integer 	$tabs 	optional
		 * @return 	string
		 */
		public function getMenu($menu, $tabs=3) {

			$items 	= Menu::getItems($menu);
			$html 	= ''. PHP_EOL;

			foreach($items as $item) {

				$html .= str_repeat("\t", $tabs);

				$html .= '<li><a href="'. $item->url .'"';
				if(!empty($item->attr)) {
					foreach($item->attr as $attr => $value) {
						$html .= ' '. $attr .'="'. $value .'"';
					}
				}
				$html .= '>'. $item->title .'</a></li>'. PHP_EOL;
			}

			return $html;

		}

	}