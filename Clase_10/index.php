<?php 
    require_once('conexion.php');
    // Escribo la consulta SQL    
    $sql = "SELECT id_mascota, nombre, fotoURL, likes FROM mascotas";
    // Ejecuto la consulta
    $respuesta = mysqli_query($conexion, $sql);
    // Convierto la respuesta en un array asociativo
    require_once('html/header.html');
    require_once('html/nav.html');
?>


    <main class="container">
        <section class="d-flex flex-wrap gap-3">
            <?php
                while(  $array = mysqli_fetch_assoc( $respuesta) ){
                    $nombre = $array['nombre'];
                    $fotoURL = $array['fotoURL'];
                    $likes = $array['likes'];
                    
                    echo("
                    <div class='card' style='width: 18rem;'>
                    <img src='$fotoURL' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>$nombre</h5>
                        <p>❤ $likes </p>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href='#' class='btn btn-primary'>Go somewhere</a>
                    </div>
                    </div>");
                }

            ?>



        </section>
    </main>

</body>
</html>

