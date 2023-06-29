<?php
session_start();
    if (empty($_SESSION["user"])) {
        $_SESSION["user"] = 0; }
    
    // conexion con la base de datos
    $servidorBD = "localhost";  
    $usuarioBD = "root";                     
    $passwordBD = "";                             
    $nombreBD = "mascotas";               
 
    $conexion = mysqli_connect($servidorBD, $usuarioBD, $passwordBD, $nombreBD);
    mysqli_set_charset($conexion, "utf8");		

    // se obtiene los datos ingresados al formulario
    $u=($_POST["user"]);
    $p=($_POST["pass"]);


    $sql = "SELECT `id_cliente`, `username`, `clave` FROM `clientes` WHERE `username`= '$u' AND `clave` = '$p'";

    $resultado= mysqli_query($conexion, $sql);
    $fila= mysqli_fetch_row($resultado);
    
    $_SESSION["user"] = $fila[1];

    if (isset($fila)) {
        $_SESSION["user"] = $fila[0];
        header ("Location: registrado.php");

        
        
    }else{
        echo'<script type="text/javascript">
        alert("User or password invalid");
        window.location.href="login.html";
        </script>';

    }
?>