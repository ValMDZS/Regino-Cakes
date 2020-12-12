<?php
include ('conection.php');

      $nombre = utf8_decode($_POST['Name']);
      $apellido = utf8_decode($_POST['Lastname']);
      $correo = utf8_decode($_POST['Email']);
      $contrasena = utf8_decode($_POST['Password']);
      $usuario = utf8_decode($_POST['usuario']);
      $telefono = utf8_decode($_POST['Phone']);
      $genero = utf8_decode($_POST['gender']);


      $consulta= "SELECT * FROM Clientes WHERE Correo='$correo'";
      $Resulado=mysqli_query($conn, $consult);
      $filas=mysqli_num_rows($Resultado);
      if($filas){
            echo "Error: correo ya registrado";
            }else{      
                  $insertvalue = "INSERT INTO usuarios (Nombre, Apellidos, Correo, Contrasena, Telefono, Sexo, Usuario) VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$telefono','$genero', '$usuario')";
                  if (mysqli_query($conn, $insertvalue)) {
                        header("Location: index.php");
                  } else {
                        echo "Error: " . $insertvalue . "<br>" . mysqli_error($conn);
                  }
            }

mysqli_close($conn);
