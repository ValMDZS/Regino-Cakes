<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden</title>
</head>
<style>
    *{
        align-items: center;
        margin: 0;
        background-color:  #E5D5C9;
    }
    .tiket{
        align-items: center;
        height: 6rem;
        width: 25%;
        background-color: white;
    }
    .codigo{
        width: 100%;
        padding: 25px;
        background-color: white;
    }
</style>
<body>
    <div class="tiket">
        <h2>Tiket de compra</h2>
        <p>Favor de pasar a una de nuestas sucursales mas cercanas, con el sigiente codigo puede usted recojer el pedido</p>
        <div class="codigo">
            <?php
            include ('pasteles.php');
            include ('conection.php');
            echo $_COOKIE($identificacion);
            ?>
        </div>
    </div>
</body>
</html>