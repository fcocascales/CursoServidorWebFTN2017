<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloNoticias extends CI_Model {

  public function listado() {
    $table = $this->db->get('noticias');
    return $table->result(); // Un array indexado de objetos
  }

  public function ficha($id) {
    $this->db->where(array('id'=> $id));
    $row = $this->db->get('noticias')->row();
    return $row;
  }

  public function insertar($datos) {
    $ok = $this->db->insert('noticias', $datos);
    return $ok;
  }

  public function modificar($id, $datos) {
    $this->db->where(array('id'=> $id));
    $ok = $this->db->update('noticias', $datos);
    return $ok;
  }

  public function borrar($id) {
    //$this->db->delete('noticias', array('id'=> $id));
    $this->db->where(array('id'=> $id));
    $ok = $this->db->delete('noticias');
    return $ok;
  }

}
