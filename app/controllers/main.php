<?php

class Main extends Controller {

	private $dependencies = [
		'viewmodels/userViewmodel'
	];

	public function __construct() {

		$this->load($this->dependencies);
		parent::__construct();
	}

	public function index() {
		
		// viewdata
		$this->viewdata->title = 'mothafucker!';

		// viewmodel
		$userViewModel = new UserViewModel();
		$userViewModel->name = 'Nuno';
		$userViewModel->email = 'nunomp@gmail.com';

		$this->render();
	}
}