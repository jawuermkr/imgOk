<?php
session_start();
ob_start();

if ($_SESSION['correcto'] != 1) {
    header('Location:index.php');
}
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
        <h3>SOLICITUDES Y REPORTE DE EVENTOS</h3>
        <p>De ser necesario por favor indicar horarios de los eventos en los <b>detalles</b>. </br>
          En caso de no ser necesaria la <b>fecha fin</b> no es requerida.</p>
        </br>
        <hr></br>
        <form action="dashboard.php" method="post">
          <small><b>Fecha Inicio</b></small>
          <input class="form-control" type="date" name="f_ini" required>
          <small><b>Fecha Fin</b><small> (No requerido)</small></small>
          <input class="form-control" type="date" name="f_fin">
          <small><b>Zona</b></small>
          <select class="form-control" type="text" name="zona" required>
            <option value="" disabled selected>--Seleccionar--</option>
            <option value="ASIA">ASIA</option>
            <option value="AUSTRALIA">AUSTRALIA</option>
            <option value="EUROPA">EUROPA</option>
            <option value="LATAM">LATAM</option>
            <option value="NORTE AMÉRICA">NORTE AMÉRICA</option>
            <option value="GLOBAL">GLOBAL</option>
          </select>
          <small><b>Tipo</b></small>
          <select class="form-control" type="text" name="tipo" required>
            <option value="" disabled selected>--Seleccionar--</option>
            <option value="Cine">Cine</option>
            <option value="Deportes">Deportes</option>
            <option value="Televisión">Televisión</option>
            <option value="Series">Series</option>
            <option value="Otro">Otro</option>
          </select>
          <small><b>Requiere pauta</b></small>
          <select class="form-control" type="text" name="pauta" required>
            <option value="" disabled selected>--Seleccionar--</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>
          <small><b>Detalles</b></small>
          <textarea class="form-control" type="text" name="detalles" required>
            </textarea>
          <input class="form-control btn btn-outline-success" type="submit" name="enviar" value="Registrar">
        </form>
      </div>
      <div class="col-md-4">
        </br>
        <?php
          include('graficos/estados.php');
        ?>
      </div>
    </div>
  </div>

  <?php if (isset($_POST['enviar'])) {
      $color = 'c26060';
      $f_ini = $_POST['f_ini'];
      $f_fin = $_POST['f_fin'];
      $zona = $_POST['zona'];
      $tipo = $_POST['tipo'];
      $pauta = $_POST['pauta'];
      $detalles = $_POST['detalles'];
      $estado = 'Pendiente';

      include 'conectar.php';
      $conexion->query(
          "INSERT INTO solicitud (color,f_ini,f_fin,zona,tipo,pauta,detalles,estado)
  values('$color','$f_ini','$f_fin','$zona','$tipo','$pauta','$detalles','$estado')"
      );

      include 'desconectar.php';
      echo '¡Datos almacenados!';
  } ?>

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