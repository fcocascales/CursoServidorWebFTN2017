<?php

  class Form {

    // 1) Atributos -----------------------------

    // Guardar aquí todos los mensajes de error
    private $errores;

    // 2) Constructor ---------------------------

    // Se llama al crear el objeto con new
    public function __construct() {
      $this->errores = array();
    }

    // 3) Métodos -------------------------------

    /*
      Obtiene el parámetro POST nombre
    */
    public function getNombre() {
      $nombre = $this->getParam('nombre', 20);
      if (empty($nombre)) {
        $this->errores[] = "Falta el nombre";
      }
      return $nombre;
    }
    /*
      Obtiene el parámetro POST correo
    */
    public function getCorreo() {
      $correo = $this->getParam('correo', 50);
      if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $this->errores[] = "El correo es inválido";
      }
      return $correo;
    }
    /*
      Obtiene el parámetro POST mensaje
    */
    public function getMensaje() {
      $mensaje = $this->getParam('mensaje', 1000);
      if (empty($mensaje)) {
        $this->errores[] = "Falta el mensaje";
      }
      return $mensaje;
    }
    /*
      Obtiene un parámetro POST saneado:
      sin espacios en blanco sobrantes y recortado
      a una longitud máxima.
    */
    private function getParam($name, $maxLength) {
      $value = isset($_POST[$name])? $_POST[$name]: "";
      $value = trim($value);
      $value = substr($value, 0, $maxLength);
      return $value;
    }
    public function hayError() {
      return !empty($this->errores);
    }
    public function mostrarErrores() {
      foreach($this->errores as $error) {
        echo "<p>$error</p>";
      }
    }

    /*
      Desde localhost no se podrá enviar el correo.
      Si se sube la página al servidor debería funcionar.

      El protocolo para enviar el correo se llama SMTP.
      Los datos de SMTP se podría configurar por PHP o
      en la configuración del Apache.

      Es el servidor el que envía el correo. Puede haber spam.
      Se podría controlar con un CAPTCHA. Google tiene uno
      muy bueno que se llama reCaptcha.

      Para un modo avanzado de enviar correo es conveniente
      bajarse la librería PHPMailer:
        - Indicar el servidor SMTP
        - Indicar el CC, CCO
        - Formato del correo puede set HTML o texto.
        - Añadir ficheros adjuntos.
    */
    public function enviarCorreo($nombre, $correo, $mensaje) {
      $destinatario = "fco.cascales@gmail.com"; // El administrador de la web
      $asunto = "Contacto envíado desde la web";
      $cuerpo = "";
      $cuerpo .= "Nombre:\n$nombre\n\n"; // .= concatena acumulando
      $cuerpo .= "Correo:\n$correo\n\n";
      $cuerpo .= "Mensaje:\n$mensaje\n\n";
      if (!mail($destinatario, $asunto, $cuerpo)) {
        $this->errores[] = "No puedo enviar el correo";
      }
    }

  } // Fin de la clase Form
