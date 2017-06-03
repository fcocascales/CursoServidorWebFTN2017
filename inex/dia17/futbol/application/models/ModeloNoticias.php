<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloNoticias extends CI_Model {

  public function listado() {
    $table = $this->db->get('noticias');
    return $table->result(); // Un array indexado de objetos
  }

  public function ficha() {
  }

  public function insertar($datos) {
    $ok = $this->db->insert('noticias', $datos);
    return $ok;
  }

  public function modificar() {
  }

  public function borrar() {
  }


}
