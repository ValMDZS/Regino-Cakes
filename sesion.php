<?php
include ('conection.php');
$correos = utf8_decode($_POST['emails']);
$contrasenas = utf8_decode($_POST['Passwords']);
session_start();
$_SESSION['email']=$correos;
$pedido= "SELECT * FROM Clientes WHERE Correo='$correos' and Contrasena='$contrasenas'";
$Respuesta=mysqli_query($conn, $pedido);
if(mysqli_num_fields($Respuesta)!=1){
    header('location: index.php');
}else{
    echo "Usuario o contraseña incorrecta";
}
    