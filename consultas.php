<?php
session_start();
ob_start();

if ($_SESSION['correcto'] != 1) {
    header('Location:index.php');
}

$hoy = date('Y-m-d');
$mesIni = date('Y-m-01');
$mesFin = date('Y-m-t');
?>
<html>

<head>
  <title>Marketing CreA | by: Verda Luno</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>


<body>
  <header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="dashboard.php"
          class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          <h2>CreA</h2>
        </a>

        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
          <li>
            <a href="index.php" class="nav-link text-white">
              Home
            </a>
          </li>
          <li>
            <a href="consultas.php" class="nav-link text-white">
              Consultas
            </a>
          </li>
          <li>
            <a href="salir.php" class="nav-link text-white">
              Salir
            </a>
          </li>
        </ul>
        <small class="text-secondary">Sesión de: <b><?php echo $_SESSION[
            'nombre'
        ]; ?></b></small>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        </br>
        <h2>Consulta detallada <b><?php echo date('F'); ?></b></h2>
        <?php
      include 'conectar.php';
      $sql = "SELECT * FROM solicitud WHERE f_ini BETWEEN '$mesIni' AND '$mesFin'";
      ($resultado = mysqli_query($conexion, $sql)) or die(mysql_error());
      $libros = [];
      while ($rows = mysqli_fetch_assoc($resultado)) {
          $libros[] = $rows;
      }
      include 'desconectar.php';
      ?>
        </br>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>○</th>
                <th>ID</th>
                <th>Fecha Inicial</th>
                <th>Fecha Final</th>
                <th>Zona</th>
                <th>Tipo</th>
                <th>Pauta</th>
                <th>Detalles</th>
                <th>Estado</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($libros as $libro) { ?>
              <tr>
                <?php $color = $libro['color']; ?>
                <?php echo '<td style="background-color:#' . $color . ';" ></td>'; ?>
                <td><?php echo $libro['id_ask']; ?></td>
                <td><?php echo $libro['f_ini']; ?></td>
                <td><?php echo $libro['f_fin']; ?></td>
                <td><?php echo $libro['zona']; ?></td>
                <td><?php echo $libro['tipo']; ?></td>
                <td><?php echo $libro['pauta']; ?></td>
                <td><?php echo $libro['detalles']; ?></td>
                <td><?php echo $libro['estado']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        </br>
        <?php
if($_SESSION['rol'] == 'admin'){
  ?>
  <form action="consultas.php" method="post">
  <label>ID para actualizar</label>
  <input class="form-control" type="text" name="id">
  <select class="form-control" type="text" name="estado">
  <option value="" disabled selected>--Seleccionar--</option>
  <option value="Lista">Lista</option>
  <option value="Publicada">Publicada</option>
</select>
<input class="form-control btn btn-success" type="submit" name="act" value="Actualizar">
</form>
<?php
}
      ?>
        <?php
          include('graficos/zonas.php');
        ?>
      </div>
    </div>
  </div>
  </div>

  </br>
  <hr>
  <footer class="text-center">
    <p>&copy <?php echo date('Y'); ?> </br>
      <a href="http://verdaluno.com">verdaluno.com</a>
    </p>
  </footer>
</body>

</html>

<!-- colores

verda 60c287
azul 6099c2
fuxia 9560c2
rojo c26060
amarillo c2bc60 -->