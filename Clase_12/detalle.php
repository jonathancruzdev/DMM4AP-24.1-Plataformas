<?php 
    // Leo el Id que paso por la URL
    $id_mascota = $_GET['id'];
    require_once('conexion.php');
    // Escribo la consulta SQL    
    $sql = "SELECT id_mascota, descripcion, mascotas.nombre, fotoURL, likes, mascotas.id_usuario, usuarios.nombre AS usuarionombre 
            FROM mascotas
            INNER JOIN usuarios ON usuarios.id_usuario = mascotas.id_usuario
            WHERE id_mascota = $id_mascota";
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
    <h2> <?php echo($nombreMascota); ?>  </h2>
    <span> Publicado por  <?php echo($usuarionombre); ?></span>
    <hr>
    <img src="<?php echo($fotoURL); ?>" alt="<?php echo($nombre); ?>">
    <p> <?php echo($descripcion); ?></p>

</main>
<?php
    require_once('html/footer.html');
?>
