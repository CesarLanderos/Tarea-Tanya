<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="login.php" method="post">
    <div>
      <label for="email">Correo: </label>
      <input type="text" name="email" id="email" required>
    </div>
    <div>
      <label for="password">Contraseña: </label>
      <input type="text" name="password" id="password" required>
    </div>
    <div>
      <label for="area">Area: </label>
      <input type="text" name="area" id="area" required>
    </div>
    <button type="submit">Login</button>
  </form>
</body>

</html>