<?php

    $hoy = date("Y-m-d");
    $mesIni = date("Y-m-01");
    $mesFin = date("Y-m-t");

    include("conectar.php");

//Estadistica General Mes IN T&T
    $resultados = mysqli_query($conexion,"SELECT COUNT(*) AS asia FROM solicitud WHERE (f_ini BETWEEN '$mesIni' AND '$mesFin') AND zona = 'ASIA'");
    while($consulta = mysqli_fetch_array($resultados)) {
    $asia = $consulta['asia'];
    }
    $resultados = mysqli_query($conexion,"SELECT COUNT(*) AS australia FROM solicitud WHERE (f_ini BETWEEN '$mesIni' AND '$mesFin') AND zona = 'AUSTRALIA'");
    while($consulta = mysqli_fetch_array($resultados)) {
    $australia = $consulta['australia'];
    }
    $resultados = mysqli_query($conexion,"SELECT COUNT(*) AS europa FROM solicitud WHERE (f_ini BETWEEN '$mesIni' AND '$mesFin') AND zona = 'EUROPA'");
    while($consulta = mysqli_fetch_array($resultados)) {
    $europa = $consulta['europa'];
    }
    $resultados = mysqli_query($conexion,"SELECT COUNT(*) AS latam FROM solicitud WHERE (f_ini BETWEEN '$mesIni' AND '$mesFin') AND zona = 'LATAM'");
    while($consulta = mysqli_fetch_array($resultados)) {
    $latam = $consulta['latam'];
    }
    $resultados = mysqli_query($conexion,"SELECT COUNT(*) AS namerica FROM solicitud WHERE (f_ini BETWEEN '$mesIni' AND '$mesFin') AND zona = 'NORTE AMÉRICA'");
    while($consulta = mysqli_fetch_array($resultados)) {
    $namerica = $consulta['namerica'];
    }
    $resultados = mysqli_query($conexion,"SELECT COUNT(*) AS global FROM solicitud WHERE (f_ini BETWEEN '$mesIni' AND '$mesFin') AND zona = 'GLOBAL'");
    while($consulta = mysqli_fetch_array($resultados)) {
    $global = $consulta['global'];
    }
    include("desconectar.php");
?>

<div class="row">
  <div class="col-md-12">
    <h2>Rango de solicitudes</h2>
    <canvas id="zonaL" width="100px" height="100px"></canvas>
  </div>
</div>

<script>
var asia = <?php echo $asia ?>;
var australia = <?php echo $australia ?>;
var europa = <?php echo $europa ?>;
var latam = <?php echo $latam ?>;
var namerica = <?php echo $namerica ?>;
var global = <?php echo $global ?>;

var ctx = document.getElementById("zonaL").getContext("2d");
var zonaL = new Chart(ctx, {
  type: "line",
  data: {
    labels: ['Asia ' + asia, 'Australia ' + australia, 'Europa ' + europa, 'LATAM ' + latam, 'N. América ' +
      namerica, 'Global ' + global
    ],
    datasets: [{
      label: 'Solicitudes por Zona',
      data: [asia, australia, europa, latam, namerica, global],
      backgroundColor: [
        'rgb(96, 194, 135)',
        'rgb(96, 153, 194)',
        'rgb(149, 96, 194)',
        'rgb(194, 96, 96)',
        'rgb(194, 188, 96)',
        'rgb(96, 96, 96)'
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