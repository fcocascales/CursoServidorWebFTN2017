<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data = array(
			'nombre'=> "Pepe",
			'telefono'=> "123-456-789"
		);
		$this->load->view('blog_inicio', $data);
	}
}
