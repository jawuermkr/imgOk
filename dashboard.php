<html>

<head>
  <title>Marketing Latino - Mio | Verda Luno</title>
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
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <h2>Marketing Admin</h2>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-white">
                Consultas
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-secondary">
                Salir
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
</br>
        <h3>SOLICITUDES Y REPORTE DE EVENTOS</h3>
        <p>De ser necesario por favor indicar horarios de los eventos en los <b>detalles</b>. </br>
        En caso de no ser requerida la <b>fecha fin</b> no es requerida.</p>
</br><hr></br>
        <form>
          <small><b>Fecha Inicio</b></small>
          <input class="form-control" type="date" name="f_ini" required>
          <small><b>Fecha Fin</b></small>
          <input class="form-control" type="date" name="f_fin">
          <small><b>Zona</b></small>
          <select class="form-control" type="text" name="zona" required>
          <option value="" disabled selected>--Seleccionar--</option>
            <option value="ASIA">ASIA</option>
            <option value="AUSTRALIA">AUSTRALIA</option>
            <option value="EUROPA">EUROPA</option>
            <option value="LATAM">LATAM</option>
            <option value="NORTE AMÉRICA">NORTE AMÉRICA</option>
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
          <small><b>Detalles</b></small>
          <textarea class="form-control" type="text" name="detalles" required>
            </textarea>
            <input class="form-control btn btn-outline-success" type="submit" name="enviar" value="Registrar"> 
        </form>
      </div>
      <div class="col-md-4">
      </br>
      <canvas id="myChart" width="400" height="400"></canvas>
      </div>
    </div>
  </div>



<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Publicadas', 'Listas', 'Pendientes'],
        datasets: [{
            label: 'Registro por Semana',
            data: [12, 7, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>



</br><hr>
<footer class="text-center">
  <p>&copy <?php echo date("Y"); ?> </br>
<a href="http://verdaluno.com">verdaluno.com</a></p>
</footer>
</body>

</html>