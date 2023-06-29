<?php
$servidorBD = "localhost";  
    $usuarioBD = "root";                     
    $passwordBD = "";                             
    $nombreBD = "mascotas";                      
 
    $conexion = mysqli_connect($servidorBD, $usuarioBD, $passwordBD, $nombreBD);
    mysqli_set_charset($conexion, "utf8");		

    $name = $_POST["nombre"];
    $lastn = $_POST["apellido"];
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $direc = $_POST["direc"];
    $tel1 = $_POST["tel1"];
    $tel2 = $_POST["tel2"];
    $date = $_POST["date"];
    $dni = $_POST["dni"];

    $sql = "INSERT INTO `clientes`(`username`, `clave`, `nombre`, `apellidos`, `fecha_nacimiento`, `direccion`, `telefono`, `telefono2`, `dni`) 
    VALUES ('$user','$pass', '$name','$lastn', '$date','$direc', '$tel1','$tel2', '$dni')";

    $resultado= mysqli_query($conexion, $sql);

    echo'<script type="text/javascript">
    alert("User created");
    window.location.href="login.html";
    </script>';
    // header ("Location: login.php");
?>