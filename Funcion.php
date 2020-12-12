<?php
session_start();
ob_start();
$user=$_SESSION['Usuario'];
function perfil($user){
    if ($user == ""){
        header('location: iniciosesion.php');
    }
}
function comprar($user, $pastel, $conn){
            $consul="SELECT Id_Usuarios FROM usuarios WHERE Usuario = '$user' ";
            $resul= mysqli_query( $conn, $consul);
            $dato =mysqli_fetch_array($resul);
            $id_usuario= $dato['Id_Usuarios'];
            $selec= "SELECT ID_pasteles FROM pasteles WHERE Nombre = '$pastel'";
            $seleccion=mysqli_query( $conn, $selec);
            $datoselec =mysqli_fetch_array($seleccion);
            $id_pastel= $datoselec['ID_pasteles'];
            $inser="INSERT INTO recibo (id_usuario, id_pedido) VALUES ('$id_usuario', '$id_pastel')";
            $insertar=mysqli_query( $conn, $inser);
            $tiket="SELECT id_recibo FROM recibo WHERE id_usuario = '$id_usuario' AND id_pedido = '$id_pastel'";                
            $consultiket=mysqli_query( $conn, $tiket);
            $datoinsert=mysqli_fetch_array($consultiket);
            
            echo $datoinsert['id_recibo'];
            mysqli_free_result($datoinsert);
}
