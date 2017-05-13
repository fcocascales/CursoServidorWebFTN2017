<?php

class ClassIndex {

	protected $root = '';
	protected $list = array(
		array( // dia1
			'title'=> "Título del primer apartado",
			'links'=> array(
				'fichero.md'=> "Texto del primer enlace",
				'fichero.php'=> "Texto del segundo enlace",
			)
		),
	);

	/*
		<li>
			<p><a href="dia01">Día 1</a> — Cliente/Servidor. XAMPP. Introducción al PHP.</p>
			<ul><?php printLinks(1) ?></ul>
		</li>
	*/
	public function printList() {
		foreach($this->list as $index=>$item) {
			$day = $index+1;
			$folder = 'dia'.self::two($day);
			$title = $item['title'];
			echo "<li>";
			echo "<p class=\"plus\">";
			echo "<a href=\"$folder.7z\" title=\"Descargar 7-zip\">Día $day</a>";
			echo " <span><span>$title</span></span>";
			//echo " [<a href=\"$folder.7z\"><sub>7</sub>z</a>]";
			echo "</p>";
			$this->printLinks($day, $item['links']);
			echo "</li>";
		}
	}

	private function printLinks($day, $links) {
		$folder = 'dia'.self::two($day);
		echo "<ul>";
		foreach ($links as $link=>$text) {
			if (self::endsWith($link, '.md'))
				$href = "../markdown.php?md={$this->root}/$folder/$link";
			else $href="$folder/$link";
			echo "<li><a href=\"$href\" target=\"dia\">$link</a> — $text</li>";
		}
		echo "</ul>";
	}

	private static function two($number) {
		return ($number<10?'0':'').$number;
	}

	private static function endsWith($haystack, $needle) {
		$length = strlen($needle);
		if ($length == 0) return true;
		else return (substr($haystack, -$length) === $needle);
	}
}
