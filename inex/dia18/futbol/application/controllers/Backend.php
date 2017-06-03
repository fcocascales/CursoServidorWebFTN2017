<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	/*
		- views/backend/inicio.php
	  - views/backend/template/head.php
	  - views/backend/template/foot.php
	*/
	public function index()
	{
		$this->load->view('backend/template/head');
		$this->load->view('backend/inicio');
		$this->load->view('backend/template/foot');
	}

}
