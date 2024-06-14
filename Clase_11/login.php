<?php
    require_once('html/header.html');
    require_once('html/nav.html');
?>
    <main class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="usuarioLogin.php" method="post" class="card p-4 mt-4">
                    <label for="">Email</label>
                    <input name="email" required class="form-control" type="email">

                    <label for="">Contraseña</label>
                    <input name="clave" required type="password" class="form-control">

                    <button class="btn btn-success mt-2" type="submit"> Login</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </main>
<?php
    require_once('html/footer.html');
?>

