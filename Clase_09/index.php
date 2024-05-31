<?php 
    $conexion = mysqli_connect('localhost', 'root', '', 'mascotas');
    // Escribo la consulta SQL    
    $sql = "SELECT id_mascota, nombre, fotoURL, likes FROM mascotas";
    // Ejecuto la consulta
    $respuesta = mysqli_query($conexion, $sql);
    // Convierto la respuesta en un array asociativo
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataformas de Desarrollo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1 class="text-center"> Conexion con base de datos</h1>
    </header>

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

