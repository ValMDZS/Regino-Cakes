<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS\styleR.css">
</head>
<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="img\logofake\conejitoo.png"  height="100px"/>
                <h3>Bienvenido</h3>
                <p>La pasteleria donde encuentras los más ricos pasteles de todo Juárez</p>
                <a href="Iniciosesion.php">
                <input type="submit" name="" value="Inicia Sesion"/></a><br/>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <form action="registro.php" method="post">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">                    
                        <h3 class="register-heading">Pasteleria Regino</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre *" value="" name="Name" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellidos *" value="" name="Lastname" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña *" value="" name="Password" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                    <label class="radio inline"> 
                                            <input type="radio" name="gender" value="o" checked>
                                            <span> Otro </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="m">
                                            <span> Hombre </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="f">
                                            <span> Mujer </span> 
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo *" value="" name="Email" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="Phone" class="form-control" placeholder="Telefono *" value="" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="Confirmar Contraseña *" value="" name="Passwordc" autocomplete="off" required/>
                                </div>
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>