<?php

require_once "connection.php";

$user = $_POST['email'];
$password = $_POST['password'];

try {
  $connection = new connection();

  $statement = $connection->prepare('SELECT * FROM Users
                                      WHERE name = :userName
                                      AND password = :passwordUser');

  $statement->execute(array(':userName' => $user,
                              ':passwordUser' => $password  ));

  if ($statement->rowCount() > 0) {
    header('location: ../Views/login.php');
  }else {
    echo "no se encontro el usuario";
  }

} catch (Exception $e) {
  echo 'Error conectando con la base de datos: ' . $e->getMessage();
}
