<?php // lib/form.php


function imprimirFormOpciones($lista, $predeterminado) {
  foreach ($lista as $value=>$option) {
    $selected = ($value==$predeterminado)? " selected" : "";
    echo "<option value=\"$value\"$selected>".htmlspecialchars($option)."</option>";
  }
}
