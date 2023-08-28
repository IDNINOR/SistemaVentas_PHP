<?php
    require_once('c://xampp/htdocs/Web_Ventas/vista/header/header.php');
    require_once('c://xampp/htdocs/Web_Ventas/config/database.php');
    $objdatabase = new Database();
    $objdatabase->getConexion();
?>

    <main>
        <div class="main-formulario">
            <form method="post" action="">
                <div class="mb-3">
                  <label for="user" class="form-label">User: </label>
                  <input type="text" class="form-control" id="user" name="user" placeholder="@User">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password: </label>
                  <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
              </form>
        </div>

    </main>

    <?php
    require_once('c://xampp/htdocs/Web_Ventas/vista/footer/footer.php');
    ?>
