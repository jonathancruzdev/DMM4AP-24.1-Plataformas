<?php 
    // Leo el Id que paso por la URL
    $id_mascota = $_GET['id'];
    require_once('conexion.php');
    // Escribo la consulta SQL    
    $sql = "SELECT id_mascota, descripcion, mascotas.nombre, fotoURL, likes, mascotas.id_usuario, usuarios.nombre AS usuarionombre 
            FROM mascotas
            INNER JOIN usuarios ON usuarios.id_usuario = mascotas.id_usuario
            WHERE id_mascota = $id_mascota";

    $sqlComentarios = "SELECT id_comentario, detalle, nombre
                        FROM comentarios
                        INNER JOIN usuarios ON usuarios.id_usuario = comentarios.id_usuario
                        WHERE id_mascota = $id_mascota";
    $respuestaComentarios =  mysqli_query($conexion, $sqlComentarios);

    // Ejecuto la consulta
    // Convierto la respuesta en un array asociativo
    $respuesta = mysqli_fetch_assoc( mysqli_query($conexion, $sql) );
    $nombreMascota = $respuesta['nombre'];
    $fotoURL = $respuesta['fotoURL'];
    $likes = $respuesta['likes'];
    $descripcion = $respuesta['descripcion'];
    $id_usuario = $respuesta['id_usuario'];
    $usuarionombre = $respuesta['usuarionombre'];

    require_once('html/header.html');
    require_once('html/nav.html');
?>
<main>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h2> <?php echo($nombreMascota); ?>  </h2>
                <span> Publicado por  <?php echo($usuarionombre); ?></span>
                <hr>
                <img src="<?php echo($fotoURL); ?>" alt="<?php echo($nombre); ?> class='img-fluid'">
                <p> <?php echo($descripcion); ?></p>
            </div>
        </div>
        <div class="col-md-4">
            <h4>Comentarios</h4>
            <ul class="list-group">
                <?php
                    while(  $array = mysqli_fetch_assoc( $respuestaComentarios) ){
                    $detalle = $array['detalle'];
                    $nombre = $array['nombre'];

                    
                    echo("<li class='list-group-item'><strong> $nombre :</strong> $detalle</li>");
                }
                ?>
            </ul>
            <hr>
            <form action="comentarioGuardar.php?id=<?php echo($id_mascota);?>" method="post">
                <textarea name="detalle"  cols="30" rows="3" class="form-control"></textarea>
                <button class="btn btn-succes" type="submit" class="btn btn-dark">Comentar</button>
            </form>
        </div>
    </div>
   

</main>
<?php
    require_once('html/footer.html');
?>
