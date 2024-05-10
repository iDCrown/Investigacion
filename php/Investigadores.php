<?php
include 'conexion.php';


if(isset($_POST['enviar'])){
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $centroInv = mysqli_real_escape_string($con, $_POST['centroInv']);

    //Configurar tiempo zona horaria
    date_default_timezone_set('America/Bogota');
    $time = date('h:i:s a', time());

    //Validar si no están vacíos
    if(!isset($nombre) || $nombre == '' || !isset($centroInv) || $centroInv == '' || !isset($email) || $email == '' ){
        $error = "Algunos campos están vacíos";
    }else{
       // $foreign = "SELECT id FROM grupos";
        $query = "INSERT INTO investigadores( nombre, email, centroInv)VALUES( '$nombre', '$email', '$centroInv')";//agregar al grupo

        if(!mysqli_query($con, $query)){
          die('Error al insertar los datos: ' . mysqli_error($con));
            $error = "Error, no se pudo crear el registro";
        }else{
            $mensaje = "Registro creado correctamente";
            header('Location: ../pages/index.php?mensaje='.urlencode($mensaje));
            exit();
        }
    }
}
    ?>