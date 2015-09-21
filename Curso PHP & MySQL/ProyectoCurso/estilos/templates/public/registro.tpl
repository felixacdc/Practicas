<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ProyectoCurso</title>
</head>
<body>
	<h1>Registro</h1>
	{if isset($error)}
	{$error}
	{/if}
	<form action="index.php?modo=registro" method="POST">
		<label>User: </label><input type="text" name="user"><br><br>
		<label>Email: </label><input type="email" name="email"><br><br>
		<label>Password: </label><input type="password" name="pass"><br><br>
		<input type="hidden" name="Registro" value="1">
		<input type="submit" value="Registrarme"><br><br>
	</form>
</body>
</html>