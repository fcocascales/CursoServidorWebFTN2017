<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('ModeloNoticias');
	}

	public function index()
	{
		$data['listado'] = $this->ModeloNoticias->listado();
		$this->load->view('backend/template/head');
		$this->load->view('backend/noticias/index', $data);
		$this->load->view('backend/template/foot');
	}

	public function nuevo() {
		$this->load->helper('form');
		$this->load->view('backend/template/head');
		$this->load->view('backend/noticias/nuevo');
		$this->load->view('backend/template/foot');
	}
	public function insertar() {
		$datos = array(
			'titulo'=> strip_tags($this->input->post("titulo")),
			'texto'=> strip_tags($this->input->post("texto")),
			'fecha'=> strip_tags($this->input->post("fecha")),
		);
		if ($this->ModeloNoticias->insertar($datos)) {
			$datos = array(
				'tipo'=> "info",
				'mensaje'=> "Noticia insertada correctamente",
			);
		}
		else {
			$datos = array(
				'tipo'=> "error",
				'mensaje'=> "No puedo insertar la noticia",
			);
		}
		$this->load->view('backend/template/head');
		$this->load->view('backend/template/mensaje', $datos);
		$this->load->view('backend/template/foot');
	}








}
