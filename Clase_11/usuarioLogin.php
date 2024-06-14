<?php
    require_once('html/header.html');
    require_once('html/nav.html');
    require_once('conexion.php');
    
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    
    $sql = "SELECT id_usuario, nombre, email
            FROM usuarios
            WHERE email = '$email' AND clave = '$clave'";
    $respuesta = mysqli_fetch_assoc( mysqli_query($conexion, $sql) );

    print_r( $respuesta);

    if( $respuesta ){
        echo(' <h2> Login 👍 </h2>');
        // Creamos las variable de session
        $_SESSION['id_usuario'] = $respuesta['id_usuario'];
        $_SESSION['nombre'] = $respuesta['nombre'];
        $_SESSION['email'] = $respuesta['email'];
        header('Location: index.php');

    } else {
        echo( "<div class='alert alert-primary' role='alert'>
            Email o Contraseña Invalida
        </div>" );
    }

    //header("Location: index.php");

?>