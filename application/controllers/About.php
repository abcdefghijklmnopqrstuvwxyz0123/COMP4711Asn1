<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{
	
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
                $this->data['pagetitle'] = 'About';
		$this->data['pagebody'] = 'about';
		$this->render();
	}



}
