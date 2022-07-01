<?php
class SHL_Language_Header {

	private static $instance = null;


	/**
	* Create Instance of Class 
	**/
	public static function getInstance() {
		if (null === self::$instance) {
			self::$instance = new SHL_Language_Header();
		}
		return self::$instance;
	}



	public function __construct() {

		/* Include Css and Js */
		add_action( 'wp_enqueue_scripts', array($this,'add_addon_script_css'));		

		/* Front End */
		add_action( 'wp_head', array($this,'sticky_header_html'),20);


	}

	



	/**
 	 * Include CSS and JS
	**/
	public function add_addon_script_css(){

		wp_enqueue_style('shl-menu-css', SHL_URL . 'assets/css/header-menu.css');

		wp_enqueue_script('shl-menu-js', SHL_URL . 'assets/js/header-menu.js');

	} 


	/**
 	 * Header HTML
	**/
	public function sticky_header_html() {

		$headerHtml = SHL_DIR . 'template/language_template.php';
		
		if (file_exists($headerHtml)) {
			ob_start();
			include $headerHtml;
			$tab_content = ob_get_contents();
			ob_end_clean();
		}

		echo $tab_content;
		return;

	}



}



/**
 * Get Loader Class Instance
**/
function SHL_Language_Header() {
	return SHL_Language_Header::getInstance();
}



SHL_Language_Header();
