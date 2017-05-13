<?php

	require_once "../modelo/BaseDatos.php";

	class TiendaControlador {

		private $nombresContactos;
		private $nombresProductos;

		public function __construct() {
			$bd = new BaseDatos();
			$this->nombresContactos = $bd->getAgenda()->listadoNombres();
			$this->nombresProductos = $bd->getAlmacen()->listadoNombres();
		}

		public function getFormAction() {
			return "comprar.php";
		}

		public function imprimirOpcionesContactos() {
			self::imprimirOpciones($this->nombresContactos);
		}
		public function imprimirOpcionesProductos() {
			self::imprimirOpciones($this->nombresProductos);
		}

		private static function imprimirOpciones($listado) {
			echo "<option></option>";
			foreach($listado as $valor) {
				echo "<option>$valor</option>";
			}
		}
	}

	$tienda = new TiendaControlador();
