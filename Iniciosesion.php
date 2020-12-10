<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/styleI.css">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <div class="fadeIn first">
            <img src="img/logofake/conejitoo.png" id="icon" alt="User Icon" />
          </div>
          <form action="sesion.php" method="post">
            <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario">
            <input type="password" id="password" class="fadeIn third" name="Passwords" placeholder="Contraseña">
            <input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
          </form>
          <div id="formFooter">
            <a class="underlineHover" href="RegistroD.php">Registrate</a>
          </div>
        </div>
      </div>
</body>
</html>