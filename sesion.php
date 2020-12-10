<?php
include ('conection.php');
$correos = utf8_decode($_POST['emails']);
$contrasenas = utf8_decode($_POST['Passwords']);
session_start();
$_SESSION['email']=$correos;
$consult= "SELECT * FROM Clientes WHERE Correo='$correos' and Contrasena='$contrasenas'";
$Resul=mysqli_query($conn, $consult);
$fila=mysqli_num_rows($Resul);
if($fila){
    header("location:Cakes.html");
    mysqli_close($conexion);
}else{
    echo "Correo o Contraseña incorrecta";
}