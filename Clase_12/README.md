# Clase 10 - Guardado en la Base de Datos MYSQL


## 📌Temas de la clase
- Login
- Página Detalle
- 

``` php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    echo("<p> $nombre - $email - $clave </p>");

    
    $sql = "INSERT INTO usuarios(nombre, email, clave)
            VALUES( '$nombre', '$email', '$clave')";
    mysqli_query($conexion, $sql);

```