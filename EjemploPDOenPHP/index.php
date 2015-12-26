<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Practica PDO</title>

  <link rel="stylesheet" href="CSS/main.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <span href="#" class="button" id="toggle-login">Log in</span>

  <div id="login">
    <div id="triangle"></div>
    <h1>Log in</h1>
    <form action="includes/callUsers.php" method="post" enctype="multipart/form-data">
      <input type="email" placeholder="Email" name="email"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="submit" value="Log in" />
    </form>
  </div>

  <script src="JS/jquery.js" charset="utf-8"></script>
  <script src="JS/main.js" charset="utf-8"></script>
</body>
</html>
