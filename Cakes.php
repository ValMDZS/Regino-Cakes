<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="vieport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="CSS/style.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <title>Pasteles</title>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nerko+One&display=swap');
    </style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: url(img/banner2.png);">
            <a class="navbar-brand" href="#"><img src="img/logo1.png" alt="" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Us.html">Acerca de nosotros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Cakes.html">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="RegistroD.php">Registrate</a>
                </li>
            </ul>
            </div>
        </nav>
        <main class="main">
            <h1 class="titleletra">Pastelería ReginoCakes</h1>
            <div class="slider">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img\Chocolate\cake1.jpg" alt="German Chocolate">
                </div>
                <div class="carousel-item">
                    <img src="img\FrutosChocolatosos\cake3.png" alt="Chocofresa blueberry">
                </div>
                <div class="carousel-item">
                    <img src="img\Arcoiris\cake4.jpg" alt="Conffetti cake">
                </div>
                <div class="carousel-item">
                    <img src="img\Galletas\cake7.png" alt="Valentin's day">
                </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            </div>
            <div class="containers">
                <h1>Pasteles De Chocolate</h1>
                <form action="pasteles.php" method="post">
                <div class="Renglon">
                    <div class="pastel">                       
                        <img src="img\Chocolate\cake1.jpg" id="cake1">
                        <p>German Chocolate<br></p>
                        <input type="hidden" name="CGerman" value="German Chocolate">
                        <input type="hidden" name="Npastel" value="1" for="CGerman">
                        <input type="submit" value="Comprar" class="car" for="CGerman">
                    </div>
                    <div class="pastel">
                        <img src="img\Chocolate\cake2.jpg" id="cake2">
                        <p>Swiss Chocolate Cake<br></p>
                        <button type="submit" value="CSwiss" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Chocolate\cake3.jpg" id="cake3">
                        <p>Chocolate Kinder Surpriser Cake<br></p>
                        <button type="submit" value="CKS" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Chocolate\cake4.jpg" id="cake4">
                        <p>Chocolate Explosion<br></p>
                        <button type="submit" value="CSwiss" class="car">Comprar</button>
                        
                    </div>
                </div>
                <h1>Pasteles De Chocolate Con Frutos</h1>
                <div class="Renglon">
                    <div class="pastel">
                        <img src="img\FrutosChocolatosos\cake1.png" id="cake5">
                        <p>Pastel de cajeta con frutos aperlados<br></p>
                        <button type="submit" value="Ccajeta" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\FrutosChocolatosos\cake2.png" id="cake6">
                        <p>Mousse de chocolate con frutos <br>del bosque</p>
                        <button type="submit" value="Cmousse" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\FrutosChocolatosos\cake3.png" id="cake7">
                        <p>Chocofresa blueberry<br></p>
                        <button type="submit" value="Cblueberry" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\FrutosChocolatosos\cake4.png" id="cake8">
                        <p>Chocolate blueberry con glaseado de cajeta<br></p>
                        <button type="submit" value="Cblueberrycaje" class="car">Comprar</button>
                        
                    </div>
                </div>
                <h1>Pasteles De Frutos Rojos</h1>
                <div class="Renglon">
                    <div class="pastel">
                        <img src="img\Frutos rojos\cake1.png" id="cake9">
                        <p>Pastel de cascada de frambuesa<br></p>
                        <button type="submit" value="Ccascada" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Frutos rojos\cake2.png" id="cake10">
                        <p>Pastel mosaico de frambuesa<br></p>
                        <button type="submit" value="Cframbuesa" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Frutos rojos\cake3.png" id="cake11">
                        <p>Pastel con cubierta de chocolate <br>con frutos</p>
                        <button type="submit" value="Cfrutos" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Frutos rojos\cake4.png" id="cake12">
                        <p>Cake de hot cake <br></p>
                        <button type="submit" value="Chotcakes" class="car">Comprar</button>
                        
                    </div>
                </div>
                <h1>Pasteles De Rainbow</h1>
                <div class="Renglon">
                    <div class="pastel">
                        <img src="img\Arcoiris\cake1.jpg" id="cake29">
                        <p>Pastel cascada de arcoiris<br></p>
                        <button type="submit" value="Ccascadaa" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Arcoiris\cake2.jpg" id="cake30">
                        <p>Rainbow dash<br></p>
                        <button type="submit" value="Creinbow" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Arcoiris\cake3.jpg" id="cake31">
                        <p>Closet cake<br></p>
                        <button type="submit" value="Ccloset" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Arcoiris\cake4.jpg" id="cake32">
                        <p>Conffetti cake<br></p>
                        <button type="submit" value="Ccofi" class="car">Comprar</button>
                        
                    </div>
                </div>
                <h1>Cheese cake</h1>
                <div class="Renglon">
                    <div class="pastel">
                        <img src="img\Cheescake\cake1.jpg" id="cake17">
                        <p>Fresa flavor<br></p>
                        <button type="submit" value="CFresa" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Cheescake\cake2.jpg" id="cake18">
                        <p>Oreo tentation<br></p>
                        <button type="submit" value="Coreo" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Cheescake\cake3.jpg" id="cake19">
                        <p>Lonely strawberry<br></p>
                        <button type="submit" value="Cstranberry" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Cheescake\cake4.jpg" id="cake20">
                        <p>Yellow<br></p>
                        <button type="submit" value="Cyellow" class="car">Comprar</button>
                        
                    </div>
                </div>
                <h1>Pasteles De Cumpleaños</h1>
                <div class="Renglon">
                    <div class="pastel">
                        <img src="img\Cumpleaños\cake1.jpg" id="cake21">
                        <p>Rainbow birthday<br></p>
                        <button type="submit" value="Cbirday" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Cumpleaños\cake2.jpg" id="cake22">
                        <p>Birthday bluepink<br></p>
                        <button type="submit" value="CBirthday" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Cumpleaños\cake3.jpg" id="cake23">
                        <p>Happy colors<br></p>
                        <button type="submit" value="Chappy" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Cumpleaños\cake4.jpg" id="cake24">
                        <p>Berry birthday<br></p>
                        <button type="submit" value="Cberry" class="car">Comprar</button>
                        
                    </div>
                </div>
                <h1>Macaroons</h1>
                <div class="Renglon">
                    <div class="pastel">
                        <img src="img\Galletas\cake1.jpg" id="cake25">
                        <p>Macaroons red heart<br></p>
                        <button type="submit" value="CMRH" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Galletas\cake2.jpg" id="cake26">
                        <p>Macaroons pink flower<br></p>
                        <button type="submit" value="CMPF" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Galletas\cake3.jpg" id="cake27">
                        <p>Escandalosos<br></p>
                        <button type="submit" value="Cescandalosos" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Galletas\cake4.jpg" id="cake28">
                        <p>Blair's macaroons<br></p>
                        <button type="submit" value="Cblair" class="car">Comprar</button>
                    </div>
                </div>
                <div class="Renglon">
                    <div class="pastel">
                        <img src="img\Galletas\cake5.png" id="cake25">
                        <p>Pink flavor<br></p>
                        <button type="submit" value="CPF" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Galletas\cake6.png" id="cake26">
                        <p>Special edition<br></p>
                        <button type="submit" value="CSE" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Galletas\cake7.png" id="cake27">
                        <p>Valentin's day<br></p>
                        <button type="submit" value="CVale" class="car">Comprar</button>
                        
                    </div>
                    <div class="pastel">
                        <img src="img\Galletas\cake8.png" id="cake28">
                        <p>Coffe taste<br></p>
                        <button type="submit" value="Ccoffe" class="car">Comprar</button>
                        
                    </div>
                </div>
                </form>
            </div>
        </main>
        <footer class="footer">
            <div class="containers">
                <p id="pro"> ReginoCakes™ Noviembre 2020 - Diciembre 2020 <a href="https://www.instagram.com/regino_cakes/" class="fa fa-instagram"></a>  </p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>