<?php
class Controller {

	private $controller;
	private $action;
	private $view;

	protected $viewdata;

	public function __construct() {

		$this->viewdata = new ViewData();
	}

	public function __set($name, $value) {
		
		$allowedSetters = ['controller', 'action', 'view'];
		if(!in_array($name, $allowedSetters)) {
			return false;
		}

		$this->$name = $value;
	}

	public function load($deps = array()) {
		foreach ($deps as $dep) {
			require_once(FPATH  . 'app/' . $dep . '.php');
		}
	}

	public function render() {

		$view = F::isNullOrEmptyString($this->view) ? 
			$this->controller . '/' . $this->action :
			$this->view;

		$view = FPATH . 'app/views/' . $view . '.php';

		// load base template
		include(FPATH . 'app/views/shared/_template.php');

	}

	// public function render($view = null, $controller = null) {

	// 	if(F::isNullOrEmptyString($view) && !F::isNullOrEmptyString($controller)) {
	// 		echo ('nope; view cannot be null when controller is not null');
	// 		exit();
	// 	}

	// 	if(F::isNullOrEmptyString($view)) {
	// 		$view = $this->controller . '/' . $this->action;
	// 	} else {
	// 		if (F::isNullOrEmptyString($controller)) {
	// 			$view = $this->controller . '/' . $view;
	// 		} else {
	// 			$view = $controller . '/' . $view;
	// 		}
	// 	}

		
	// 	$view = FPATH . 'app/views/' . $view . '.php';
		

	// 	// load base template
	// 	include(FPATH . 'app/views/shared/_template.php');

	// }

}