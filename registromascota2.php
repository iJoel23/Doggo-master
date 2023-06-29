<?php
session_start();

$servidorBD = "localhost";  
    $usuarioBD = "root";                     
    $passwordBD = "";                             
    $nombreBD = "mascotas";                      
 
    $conexion = mysqli_connect($servidorBD, $usuarioBD, $passwordBD, $nombreBD);
    mysqli_set_charset($conexion, "utf8");		

    $name = $_POST["nombre"];
    $user = $_SESSION["user"];
    $date = $_POST["date"];
    $chip = $_POST["chip"];
    $raza = $_POST["raza"];

    $sql = "INSERT INTO `mascotas`(`nombre`, `fecha_nacimiento`, `id_cliente`, `id_raza`, `chip`) 
    VALUES ('$name','$date','$user', '$raza', '$chip')";

    $resultado= mysqli_query($conexion, $sql);

    echo'<script type="text/javascript">
    alert("Mascota Registrada");
    window.location.href="registrado.html";
    </script>';
?>