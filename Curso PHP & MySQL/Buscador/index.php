<?php

include('class.Conexion.php');

if ( isset($_POST['buscar']) ) {
    $db = new Conexion();
    $filtro = $db->real_escape_string($_POST['buscar']);
    $sql = $db->query("SELECT * FROM autos WHERE nombre like '%$filtro%'");
    
    if ( $db->rows($sql) > 0) {
        while ( $auto = $db->recorrer($sql) ) {
            echo $auto['id'], ' y el nombre es ', $auto['nombre'], ' y el precio ', $auto['precio'], '<br/>';
        }
    } else {
        echo 'No se han encontrado resultados.';
    }
    
} else {
    echo '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buscador</title>
    <link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.min.css">
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#buscar').autocomplete({
                source: 'ajax.php'
            });
        });
    </script>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Buscar: </label><input type="text" name="buscar" id="buscar">
        <input type="submit" value="Buscar">
    </form>
</body>
</html>