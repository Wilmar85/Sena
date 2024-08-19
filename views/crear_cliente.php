<?php
session_start();
if (empty($_SESSION["Id"])) {
  header("location: ../index.php");
}
$title = 'Crear Cliente';
?>
<!DOCTYPE html>
<html>
<?php require("../content/head.php"); ?>

<body>
  <?php require("../content/navbar.php"); ?>

  <div class="container d-flex flex-column mt-5">
    <div class="row">
      <div class="col-xl-3">
        <div class="container-fluid d-flex flex-xl-column flex-grow-1 position-relative">
          <div class="container text-center">
            <img src="../images/ImgResponsive_Placeholder.png" class="rounded-circle img-fluid" alt="Placeholder image">
          </div>
          <div class="container">
            <h5 class="text-center text-uppercase"><?php echo $_SESSION["nombre"] . " " . $_SESSION["apellido"]; ?></h5>
          </div>
          <div class="container d-flex flex-column flex-grow-1 position-relative m-2">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active btn btn-primary m-2" aria-current="page" href="./views/crear_cliente.php">Crear Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-secondary m-2" href="#">Crear Proyecto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-secondary m-2" href="#">Crear Ficha</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <h1>Crear Cliente</h1>
      <form action="../model/Cliente/crear" method="post">
        <label for="nombre">Nombre del Cliente:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="ciudad">Ciudad del Cliente:</label>
        <input type="text" id="ciudad" name="ciudad" required><br><br>

        <label for="telefono">Teléfono del Cliente:</label>
        <input type="tel" id="telefono" name="telefono"><br><br>

        <label for="correo">Correo del Cliente:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <input type="submit" value="Crear Cliente">
      </form>

      <?php require("../content/script.php"); ?>
</body>

</html>