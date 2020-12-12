<?php

    include ('conection.php');
    session_start();
    $user=$_SESSION['Usuario'];
    @$cakechocolatealeman = utf8_decode($_POST['CGerman']);
    @$cakeswisschocolate = utf8_decode($_POST['CSwiss']);
    @$cakechocolatesorpresa = utf8_decode($_POST['CKS']);
    @$cakechocolateexplo = utf8_decode($_POST['Esplotion']);

    @$cakechocolatecajeta = utf8_decode($_POST['Ccajeta']);
    @$cakechocolatefrutosbosque = utf8_decode($_POST['Cmousse']);
    @$cakechocolateblueberry = utf8_decode($_POST['Cblueberry']);
    @$cakechocolateablueberrycaje = utf8_decode($_POST['Cblueberrycaje']);

    @$cakefrutosframbuesa = utf8_decode($_POST['Ccascada']);
    @$cakefrutosmosaicofram = utf8_decode($_POST['Cframbuesa']);
    @$cakefrutoschocofrutos = utf8_decode($_POST['Cfrutos']);
    @$cakefrutoshotcake = utf8_decode($_POST['Chotcakes']);

    @$cakerainbowarcoiris = utf8_decode($_POST['Ccascadaa']);
    @$cakerainbowdash = utf8_decode($_POST['Creinbow']);
    @$cakerainbowcloset = utf8_decode($_POST['Ccloset']);
    @$cakerainbowCOFFI = utf8_decode($_POST['Ccofi']);

    @$cakecheeseflavor = utf8_decode($_POST['CFresa']);
    @$cakecheeseoreo = utf8_decode($_POST['Coreo']);
    @$cakecheesstrawbe = utf8_decode($_POST['Cstranberry']);
    @$cakecheeseyelllow = utf8_decode($_POST['Cyellow']);

    @$cakecumplebirthday = utf8_decode($_POST['Cbirday']);
    @$cakecumplebluepink = utf8_decode($_POST['CBirthday']);
    @$cakecumplehappy = utf8_decode($_POST['Chappy']);
    @$cakecumpleberry = utf8_decode($_POST['Cberry']);

    @$cakemacaroonsresjart = utf8_decode($_POST['CMRH']);
    @$cakemacaroonspinky = utf8_decode($_POST['CMPF']);
    @$cakemacaroonsosos = utf8_decode($_POST['Cescandalosos']);
    @$cakemacaroonsBlair = utf8_decode($_POST['Cblair']);
    @$cakemacaroonssaborrosa = utf8_decode($_POST['CPF']);
    @$cakemacaroonsespacial = utf8_decode($_POST['CSE']);
    @$cakemacaroonsValentin = utf8_decode($_POST['CVale']);
    @$cakemacaroonsCafeina = utf8_decode($_POST['Ccoffe']);

    @$especialNavidadcho = utf8_decode($_POST['Choconavi']);
    @$especialNavidadcolatin = utf8_decode($_POST['Clatinavi']);
    @$especialNavidadgalleta = utf8_decode($_POST['Cgallenavi']);
    @$especialNavidadcakevidad = utf8_decode($_POST['Cakevidad']);
    @$especialNavidadGallena1 = utf8_decode($_POST['Cvideño1']);
    @$especialNavidadGallena2 = utf8_decode($_POST['Cvideño2']);
    @$especialNavidadchocorol = utf8_decode($_POST['Crol']);
    @$especialNavidadElsa = utf8_decode($_POST['Cfrozen']);
    @$especialNavidadnavidenocake = utf8_decode($_POST['Caken']);
    @$especialNavidadJengi1 = utf8_decode($_POST['Cjengi']);
    @$especialNavidadJengi2 = utf8_decode($_POST['Cjengi2']);
    @$especialNavidadMacaroon = utf8_decode($_POST['Cmacana']);
    $pastel='GermanChocolate';
    if ($user == ""){
        header('location: iniciosesion.php');
    }
    $consul="SELECT Id_Usuarios FROM usuarios WHERE Usuario = '$user' ";
    $resul= mysqli_query( $conn, $consul);
    $dato =mysqli_fetch_array($resul);
    $id_usuario= $dato['Id_Usuarios'];
        if ($cakechocolatealeman) {
            $pastel="German Chocolate";
            $selec= "SELECT ID_pasteles FROM pasteles WHERE Nombre = '$pastel'";
            $seleccion=mysqli_query( $conn, $selec);
            $datoselec =mysqli_fetch_array($seleccion);
            $id_pastel= $datoselec['ID_pasteles'];
            $inser="INSERT INTO recibo (id_usuario, id_pedido) VALUES ('$id_usuario', '$id_pastel')";
            $insertar=mysqli_query( $conn, $inser);
            $tiket="SELECT id_recibo FROM recibo WHERE id_usuario = '$id_usuario' AND id_pedido = '$id_pastel'";                
            $consultiket=mysqli_query( $conn, $tiket);
            $datoinsert=mysqli_fetch_array($consultiket);
            $id_insertado=$datoinsert['id_recibo'];
            $identificacion=json_encode($id_insertado);
            header('location: carrito.php');
        }
            