<?php

/**
 * Clase Conexion
 */
class connection extends PDO
{

  function __construct()
  {

    parent::__construct('mysql:host=localhost;dbname=test', 'root', '');
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }
}
