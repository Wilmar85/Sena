<?php
session_start();
if (empty($_SESSION["Id"])){
    header("location: ./index.php");
}
$title = 'main';
?>
<!doctype html>
<html>
<?php require("content/head.php"); ?>
<body>
  <?php require("content/navbar.php"); ?>  
<div class="container d-flex flex-column mt-5">
  <div class="row">
      <div class="col-xl-3" >
        <div class="container-fluid d-flex flex-xl-column flex-grow-1 position-relative">
        <div class="container text-center">          
        <img src="images/ImgResponsive_Placeholder.png" class="rounded-circle img-fluid" alt="Placeholder image"></div>
        <div class="container">
            <h5 class="text-center text-uppercase"><?php echo $_SESSION["nombre"]. " ". $_SESSION["apellido"]; ?></h5></div>
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

      <div class="col-xl-9">  
          <div class="container"><h2 class="text-center">Seguimiento a Cotizaciones</h2>
          </div>
          
<div class="container d-flex justify-content-center align-items-center mt-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id Cotizacion</th>
      <th scope="col">Cliente</th>
      <th scope="col">Proyecto</th>
      <th scope="col">Ciudad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
              
        </div>
    </div>
              
 </div>
</div>

<?php require("content/script.php"); ?>
</body>
</html>