<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Titulo</title>
    <script type="text/javascript" src="estilos/templates/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

          function hora(){
            $.ajax({
              type: 'GET',
              url: 'hora.php',
              success: function ($hora) {
                $('#hora').html($hora);
                setTimeout(hora(), 1000);
              }
            });
          }

          setTimeout(hora(), 1000);
        });
    </script>

  </head>
  <body>
    <h1>Bienvenido {$user}</h1>
    <p id="hora"></p>
  </body>
</html>
