<?php
include ('conection.php');
$usuario = utf8_decode($_POST['usuario']);
$contrasenas = utf8_decode($_POST['Passwords']);
session_start();
$_SESSION['Usuario']=$usuario;
$pedido= "SELECT * FROM Clientes WHERE Contrasena='$contrasenas' and Usuario='$usuario'";
$Respuesta=mysqli_query($conn, $pedido);
if(mysqli_num_fields($Respuesta)!=1){
    header('location: index.php');
}else{
    echo "Usuario o contraseña incorrecta";
}
    