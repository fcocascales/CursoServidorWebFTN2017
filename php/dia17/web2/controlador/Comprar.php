<?php

	require_once "../modelo/BaseDatos.php";

	class ComprarControlador {

		private $mensaje;

		public function __construct() {
			$this->realizarCompra();
		}

		private function realizarCompra() {
			$bd = new BaseDatos();
			$producto = $bd->getAlmacen()->buscarProducto($this->getNombreProducto());

			if ($producto->getCantidad() < $this->getCantidadProducto()) {
				$this->mensaje = "No hay suficiente cantidad en el almacen";
			} else {
				$importe = $producto->getPrecio() * $this->getCantidadProducto();
				$this->mensaje = "Importe de la compra: $importe euros";
				$producto->setCantidad($producto->getCantidad() - $this->getCantidadProducto());
			}
		}

		public function getNombreContacto() {
			$contacto = self::getParam('contacto');
			$contacto = self::sanearTexto($contacto);
			return $contacto;
		}
		public function getNombreProducto() {
			$producto = self::getParam('producto');
			$producto = self::sanearTexto($producto);
			return $producto;
		}
		public function getCantidadProducto() {
			$cantidad = self::getParam('cantidad');
			$cantidad = floatval($cantidad);
			return $cantidad;
		}
		public function getMensajeOperacion() {
			return $this->mensaje;
		}

		private static function getParam($nombre, $valorPredeterminado='') {
			return isset($_POST[$nombre])? $_POST[$nombre] : $valorPredeterminado;
		}
		private static function sanearTexto($valor, $maximaLongitud=20) {
			$valor = strip_tags($valor);
			$valor = substr($valor, 0, $maximaLongitud);
			return $valor;
		}

	}

	$comprar = new ComprarControlador();
