<?php
    session_start();
    unset( $_SESSION['nombre'] );
    session_unset();
    session_destroy();
    header('Location: index.php');
?>