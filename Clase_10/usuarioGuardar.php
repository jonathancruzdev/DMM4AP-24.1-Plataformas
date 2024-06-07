<?php
    require_once('conexion.php');
    echo("Guardando Usuario");
    // Recibo los datos del Formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    echo("<p> $nombre - $email - $clave </p>");

    
    $sql = "INSERT INTO usuarios(nombre, email, clave)
            VALUES( '$nombre', '$email', '$clave')";
    mysqli_query($conexion, $sql);

    header("Location: index.php");

?>