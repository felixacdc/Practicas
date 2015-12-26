<?php

require_once "connection.php";

$user = $_POST['email'];
$password = $_POST['password'];

try {
  $connection = new connection();

  $sql = $connection->query("SELECT * FROM Users
        WHERE name='$user' AND password='$password'");

  $total = $sql->num_rows;

  if($total > 0){
    header('location: ../Views/login.php');
  }else {
    echo "no se encontro el usuario";
  }

} catch (Exception $e) {
  echo 'Error conectando con la base de datos: ' . $e->getMessage();
}
