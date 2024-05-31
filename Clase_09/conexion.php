<?php                                                // nombre Base
    $conexion = mysqli_connect('localhost', 'root', '', 'mascotas');
    
    
    // Escribo la consulta SQL    
    $sql = "SELECT id_mascota, nombre, fotoURL, likes FROM mascotas";

    // Ejecuto la consulta
    $respuesta = mysqli_query($conexion, $sql);
    // Convierto la respuesta en un array asociativo
    $array = mysqli_fetch_assoc( $respuesta);

    print_r($array);

?>