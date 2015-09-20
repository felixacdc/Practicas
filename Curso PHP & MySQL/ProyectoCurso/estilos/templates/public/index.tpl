<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ProyectoCurso</title>
</head>
<body>
	<h1>Index</h1>
	<form action="index.php?modo=login" method="POST">
		<label>User</label><input type="text" name="user">
		<label>Password</label><input type="password" name="pass">
		<input type="hidden" name="login" value="1">
		<input type="submit" value="Iniciar Sesion">
	</form>
</body>
</html>