<?php
/**
 *
 */
class GenerarPass
{

  private $cadena;
  private $longitud;
  private $passw;

  public function __construct()
  {
    $this->cadena = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0123456789";
    $this->passw = '';
  }

  public function NuevoPassword($long)
  {
    $lng_cadena = strlen($this->cadena);
    $this->longitud = $long;

    for ($i=1; $i <= $this->longitud; $i++) {

      $aleatorio = mt_rand(0, $lng_cadena - 1);
      $this->passw .= substr($this->cadena, $aleatorio, 1);

    }

    return $this->passw;

  }

}
