<?php

function subirFoto($id) {
  if (isset($_FILES['foto'])) {
    if ($_FILES['foto']['error'] == 0) {
      if ($_FILES['foto']['type'] == 'image/jpeg') { // JPG?
        $foto = rutaFotoSubida($id);
        move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
        return true;
      }
    }
  }
  return false;
}

function rutaFoto($id) {
  $foto = rutaFotoSubida($id);
  if (file_exists($foto)) return $foto;
  return "../../img/categorias/0.jpg";
}

function rutaFotoSubida($id) {
  return "../../img/categorias/$id.jpg";
}
