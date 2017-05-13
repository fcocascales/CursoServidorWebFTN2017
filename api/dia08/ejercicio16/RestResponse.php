<?php
  // RestResponse.php

  class RestResponse {

    private $data;

    public function setContent($data) {
      $this->data = $data;
    }

    public function send() {
      $json = json_encode($this->data,
        JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
      header("Content-Type: application/json");
      echo $json;
    }

  }
