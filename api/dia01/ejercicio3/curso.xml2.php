<?php

	//require_once "curso.php";
	$curso = array(
		'curso'=> array(
	    'alumnos'=> array(
	      "Toni", "Barlan", "David", "Emilio",
	      "Jordi", "Marta", "Sergio", "Víctor"
	    ),
	    'horario'=> array(
	      'dias'=> array(
	        "lun", "mar", "mié", "jue", "vie"
	      ),
	    ),
			'horario_attr'=> array(
				'hora_inicio'=> "9:00",
				'hora_final'=> "14:00"
			)
		),
		'curso_attr'=> array(
			'profesor'=> "Francisco",
			'aula'=> 11,
	    'ordenadores'=> 21,
		)
  );

	header("Content-type: application/xml");
	//header("Content-type: text/plain");

	echo '<?xml version="1.0" encoding="UTF-8"?>'."\n";
	echo recurse2xml($curso, $xml);

	function recurse2xml ($array, &$string = "") {
		$QUOTE = '"';
    foreach ($array as $key=>$subarray) {
        if (substr($key, -5) == "_attr") continue;
				if (is_numeric($key)) $key = 'item';
        $attrs = "";
        if (isset($array[$key."_attr"]))
          foreach ($array[$key."_attr"] as $attr=>$value)
            $attrs .= " $attr=".$QUOTE.str_replace($QUOTE, '\"', $value).$QUOTE;
        if (empty($subarray)) {
          $string .= "<$key$attrs />\n";
        } else {
          $string .= "<$key$attrs>";
          if (is_scalar($subarray))
            $string .= htmlspecialchars("$subarray"); //$subarray;
          else
            recurse2xml($subarray, $string);
          $string .= "</$key>\n";
        }
    }
    return $string;
}
