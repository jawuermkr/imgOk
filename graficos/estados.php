<?php

    $hoy = date("Y-m-d");
    $mesIni = date("Y-m-01");
    $mesFin = date("Y-m-t");

    include("conectar.php");

//Estadistica General Mes IN T&T
    $resultados = mysqli_query($conexion,"SELECT COUNT(*) AS public FROM solicitud WHERE (f_ini BETWEEN '$mesIni' AND '$mesFin') AND estado = 'Publicada'");
    while($consulta = mysqli_fetch_array($resultados)) {
    $public = $consulta['public'];
    }
    $resultados = mysqli_query($conexion,"SELECT COUNT(*) AS lista FROM solicitud WHERE (f_ini BETWEEN '$mesIni' AND '$mesFin') AND estado = 'Lista'");
    while($consulta = mysqli_fetch_array($resultados)) {
    $lista = $consulta['lista'];
    }
    $resultados = mysqli_query($conexion,"SELECT COUNT(*) AS pendi FROM solicitud WHERE (f_ini BETWEEN '$mesIni' AND '$mesFin') AND estado = 'Pendiente'");
    while($consulta = mysqli_fetch_array($resultados)) {
    $pendi = $consulta['pendi'];
    }
    include("desconectar.php");
?>

<div class="row">
  <div class="col-md-12">
    <h3>Registro del Día</h3>
    <canvas id="estados" width="100px" height="100px"></canvas>
  </div>
</div>

<script>
var public = <?php echo $public ?>;
var lista = <?php echo $lista ?>;
var pendi = <?php echo $pendi ?>;

var ctx = document.getElementById("estados").getContext("2d");
var estados = new Chart(ctx, {
  type: "bar",
  data: {
    labels: ['Publicadas ' + public, 'Listas ' + lista, 'Pendientes ' + pendi],
    datasets: [{
      label: 'Estados por mes',
      data: [public, lista, pendi],
      backgroundColor: [
        'rgb(96, 194, 135)',
        'rgb(149, 96, 194)',
        'rgb(194, 96, 96)'
      ]
    }]
  }
});
</script>

<!-- colores

verda 60c287
azul 6099c2
fuxia 9560c2
rojo c26060
amarillo c2bc60 -->