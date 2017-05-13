<?php

  // BaseDatos.php
  //
  // Base de datos simulada
  // Una BD es un conjunto de tablas

  require_once "TablaAgenda.php";
  require_once "TablaAlmacen.php";

  class BaseDatos {

    private $agenda;
    private $almacen;

    public function __construct() {
      $this->agenda = new TablaAgenda();
      $this->almacen = new TablaAlmacen();
    }

    public function getAgenda() {
      return $this->agenda;
    }

    public function getAlmacen() {
      return $this->almacen;
    }

  }
