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
		if ($this->ModeloNoticias->insertar($datos))
			   $this->mensaje("info", "Noticia insertada correctamente");
		else $this->mensaje("error", "Noticia no insertada");
	}

	function editar($id) {
		$row = $this->ModeloNoticias->ficha($id);
		$this->load->helper('form');
		$this->load->view('backend/template/head');
		$this->load->view('backend/noticias/editar', $row);
		$this->load->view('backend/template/foot');
	}
	function modificar($id) {
		/*
		$controller = $this->uri->segment(1); // "noticias"
		$method = $this->uri->segment(2); // "modificar"
		$id = $this->uri->segment(3);
		*/
		$datos = array(
			'titulo'=> strip_tags($this->input->post("titulo")),
			'texto'=> strip_tags($this->input->post("texto")),
			'fecha'=> strip_tags($this->input->post("fecha")),
		);
		if ($this->ModeloNoticias->modificar($id, $datos))
			   $this->mensaje("info", "Noticia modificada correctamente");
		else $this->mensaje("error", "Noticia no modificada");
	}

	function borrando($id) {
		$row = $this->ModeloNoticias->ficha($id);
		$this->load->helper('form');
		$this->load->view('backend/template/head');
		$this->load->view('backend/noticias/borrando', $row);
		$this->load->view('backend/template/foot');
	}
	function borrar($id) {
		$this->ModeloNoticias->borrar($id);
		$this->mensaje("info", "Noticia borrada correctamente");
	}

	private function mensaje($tipo, $mensaje) {
		$datos = array(
			'tipo'=> $tipo,
			'mensaje'=> $mensaje,
		);
		$this->load->view('backend/template/head');
		$this->load->view('backend/template/mensaje', $datos);
		$this->load->view('backend/template/foot');
	}

}
