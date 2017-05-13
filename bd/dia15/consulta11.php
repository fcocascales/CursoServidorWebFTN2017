<?php

	//==============================================

	class Informe {

		//---------------------------------------------
		// CONNECTION

		private $connection = "mysql:host=localhost;dbname=bd_neptuno";
		private $user = "root";
		private $password = "";

		private function request_connection() {
			if (isset($_REQUEST['connection'])) $this->connection = $_REQUEST['connection'];
			if (isset($_REQUEST['user'])) $this->user = $_REQUEST['user'];
			if (isset($_REQUEST['password'])) $this->password = $_REQUEST['password'];
		}

		public function getConnection() { return $this->connection; }
		public function getUser() { return $this->user; }
		public function getPassword() { return $this->password; }

		//---------------------------------------------
		// ATTRIBUTES

		private $title = "Informe";
		private $groups = 2;

		private $pdo = null;
		private $sql = "";
		private $table = array();
		private $message = "";
		private $old = array();

		//---------------------------------------------
		// CONSTRUCT

		public function __construct($sql, $title="Informe", $groups=3) {
			try {
				$this->title = $title;
				$this->groups = $groups;
				$this->sql = $sql;
				$this->request_connection();
				$this->conectar_bd();
				$this->get_table();
			}
			catch (Exception $ex) {
				$this->message = $ex->getMessage();
			}
		}

		//---------------------------------------------
		// DB

		private function conectar_bd() {
			$this->pdo = new PDO($this->connection, $this->user, $this->password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->exec("SET CHARACTER SET UTF8");
			$this->pdo->exec("SET sql_mode = ''");
			$this->pdo->exec("SET lc_time_names = 'es_ES'");
		}

		private function get_table() {
			$statement = $this->pdo->prepare($this->sql);
			$statement->execute();
			$this->table = $statement->fetchAll(PDO::FETCH_ASSOC);
			$this->old = array_fill(0, $statement->columnCount(), '');
			$statement->closeCursor();
		}

		//---------------------------------------------
		// PRINT

		public function print() {
			if ($this->has_result()) {
				$this->table = array_reverse($this->table);
				$this->print_report();
				//$this->print_table();
			}
			else {
				$this->print_message();
			}
		}

		public function has_result() {
			return empty($this->message);
		}

		public function print_message() {
			echo "<p>";
			echo htmlspecialchars($this->message);
			echo "</p>";
		}

		//---------------------------------------------
		// REPORT

		public function print_report() {
			$close = "</h1>\n";
			echo "<h1><strong>".$this->title."</strong>";
			foreach($this->table as $row) {
				$index = 0;
				foreach($row as $key=>$value) {
					$text = $this->cell_value($value);
					if ($index >= $this->groups) {
						echo " &rarr; <em>".self::decimal($text)." €</em>";
						echo $close;
						$close = "";
					}
					elseif ($this->old[$index] != $value) {
						$this->old[$index] = $value;
						if ($value != null) {
							$h = $index+2;
							echo $close;
							$close = "</h$h>\n";
							echo "<h$h>";
							echo ucfirst($key)." <strong>$text</strong>";
						}
					}
					else {
						/////echo "<span>$index-$key-$text</span> ";
					}
					$index++;
				}
			}
			echo $close;
		}

		//---------------------------------------------
		// TABLE

		public function print_table() {
			$this->header = true;
			echo '<table>';
			foreach($this->table as $row) {
				$this->print_header($row);
				echo "<tr>";
				foreach($row as $key=>$value) {
					$class = $this->cell_class($value);
					$value = $this->cell_value($value);
					echo "<td$class>$value</td>";
				}
				echo "</tr>\n";
			}
			echo '</table>';
		}

		private function print_header($row) {
			if ($this->header) {
				$this->header = false;
				echo "<tr>";
				foreach($row as $key=>$value) {
					echo "<th>$key</th>";
				}
				echo "</tr>\n";
			}
		}

		private function cell_class($value) {
			$class = '';
			if (is_numeric($value)) $class.="num";
			if (!empty($class)) $class=" class=\"$class\"";
			return $class;
		}

		private function cell_value($value) {
			if ($value == null) return "<span>null</span>";
			else return nl2br(htmlspecialchars($value));
		}

		private static function decimal($number) {
			return number_format($number, $decimals=0, $dec_point=",", $thousands_sep=".");
		}

	} // Informe

	//==============================================

	class Informe11 extends Informe {

		private $sql =
			"SELECT empresa,
	      YEAR(fecha_pedido) AS año,
				MONTH(fecha_pedido) AS mes,
	      ROUND(SUM(cantidad*precio_unidad*(1-descuento)) + cargo) AS total
	    FROM pedidos
	      INNER JOIN detalles ON pedidos.id = pedido_id
	      INNER JOIN clientes ON clientes.id = cliente_id
	    GROUP BY 1 DESC, 2 DESC, 3 DESC WITH ROLLUP";

		public function __construct() {
			parent::__construct($this->sql, "Facturación en Neptuno", 3);
		}

	} // Informe11

	//==============================================

	$inf11 = new Informe11();

	//==============================================

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Facturación Neptuno</title>
<style media="screen">
	h1, h2, h3, h4, h5, h6 { font-weight:normal; }
	h2 { margin-left:2em; }
	h3 { margin-left:4em; }
	h4 { margin-left:6em; }
	h5 { margin-left:8em; }
	h6 { margin-left:10em; }
	span { color:#ccc; }
	em {
		font-style:normal;
		font-family:georgia;
		color:#339;
	}
	table {
		border-collapse:collapse;
		border:1px solid #999;
	}
	th {
		font-weight:normal;
		background-color:#666;
		color:#fff;
		padding:0.1em 0.3em;
	}
	td {
		border-left:1px solid #999;
		padding:0.2em 0.3em;
		hyphens: auto;
	}
	tr:nth-child(even) {
		background-color:#eee;
	}
	td span {
		color:#999;
		font-style:italic;
	}
	td.num {
		text-align:right;
	}
</style>
</head>
<body>
	<?php $inf11->print(); ?>
</body>
</html>
