<?php
    session_start();

    require_once('conexion.php');
    // Recibo los datos del Formulario
    $detalle = $_POST['detalle'];
    $id_mascota = $_GET['id'];
    $id_usuario = $_SESSION['id_usuario'];  // El id del usuario logueado

    
    $sql = "INSERT INTO comentarios(detalle, id_mascota, id_usuario)
            VALUES( '$detalle', $id_mascota, $id_usuario)";
    mysqli_query($conexion, $sql);

    header("Location: detalle.php?id=$id_mascota");

?>