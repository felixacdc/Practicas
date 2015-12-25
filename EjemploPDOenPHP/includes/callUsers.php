<?php

require_once "connection.php";

$user = 'pablo';
$password = '12345';

try {
  $connection = new connection();

  $statement = $connection->prepare('SELECT * FROM Users WHERE name = :userName AND password = :passwordUser');
  $statement->execute(array(':userName' => $user, ':passwordUser' => $password  ));

} catch (Exception $e) {
  echo 'Error conectando con la base de datos: ' . $e->getMessage();
}
