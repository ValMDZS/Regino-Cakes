<?php
    include ('Funcion.php');
    include ('conection.php');
    $user=$_SESSION['Usuario'];
    @$cakechocolatealeman =$_POST['CGerman'];
    $cakechocolatealemanN = ["German Chocolate"];
    @$cakeswisschocolate = $_POST['CSwiss'];
    @$cakechocolatesorpresa = $_POST['CKS'];
    @$cakechocolateexplo = $_POST['Esplotion'];

    @$cakechocolatecajeta = $_POST['Ccajeta'];
    @$cakechocolatefrutosbosque = $_POST['Cmousse'];
    @$cakechocolateblueberry = $_POST['Cblueberry'];
    @$cakechocolateablueberrycaje = $_POST['Cblueberrycaje'];

    @$cakefrutosframbuesa = $_POST['Ccascada'];
    @$cakefrutosmosaicofram = $_POST['Cframbuesa'];
    @$cakefrutoschocofrutos = $_POST['Cfrutos'];
    @$cakefrutoshotcake = $_POST['Chotcakes'];

    @$cakerainbowarcoiris = $_POST['Ccascadaa'];
    @$cakerainbowdash = $_POST['Creinbow'];
    @$cakerainbowcloset = $_POST['Ccloset'];
    @$cakerainbowCOFFI = $_POST['Ccofi'];

    @$cakecheeseflavor = $_POST['CFresa'];
    @$cakecheeseoreo = $_POST['Coreo'];
    @$cakecheesstrawbe = $_POST['Cstranberry'];
    @$cakecheeseyelllow = $_POST['Cyellow'];

    @$cakecumplebirthday = $_POST['Cbirday'];
    @$cakecumplebluepink = $_POST['CBirthday'];
    @$cakecumplehappy = $_POST['Chappy'];
    @$cakecumpleberry = $_POST['Cberry'];

    @$cakemacaroonsresjart = $_POST['CMRH'];
    @$cakemacaroonspinky = $_POST['CMPF'];
    @$cakemacaroonsosos = $_POST['Cescandalosos'];
    @$cakemacaroonsBlair = $_POST['Cblair'];
    @$cakemacaroonssaborrosa = $_POST['CPF'];
    @$cakemacaroonsespacial = $_POST['CSE'];
    @$cakemacaroonsValentin = $_POST['CVale'];
    @$cakemacaroonsCafeina = $_POST['Ccoffe'];

    @$especialNavidadcho = $_POST['Choconavi'];
    @$especialNavidadcolatin = $_POST['Clatinavi'];
    @$especialNavidadgalleta = $_POST['Cgallenavi'];
    @$especialNavidadcakevidad = $_POST['Cakevidad'];
    @$especialNavidadGallena1 = $_POST['Cvideño1'];
    @$especialNavidadGallena2 = $_POST['Cvideño2'];
    @$especialNavidadchocorol = $_POST['Crol'];
    @$especialNavidadElsa = $_POST['Cfrozen'];
    @$especialNavidadnavidenocake = $_POST['Caken'];
    @$especialNavidadJengi1 = $_POST['Cjengi'];
    @$especialNavidadJengi2 = $_POST['Cjengi2'];
    @$especialNavidadMacaroon = $_POST['Cmacana'];

    echo perfil($user);

        if ($cakechocolatealeman) {
            $pastel="German Chocolate";
            echo comprar ($user, $pastel, $conn);
            header('location: carrito.php');
        }