<html>

<head>
  <title>Marketing Latino - Mio | Verda Luno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
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
                Dashboard
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
        <h2>Solicitud y reporte de eventos.</h2>
        <p>De ser necesario por favor indicar horarios de los eventos en los <b>detalles</b>. En caso de no ser
          requerida la <b>fecha fin</b> no es requerida.</p>
        <form>
          <label>Fecha Inicio</label>
          <input class="form-control" type="date" name="f_ini" required>
          <label>Fecha Fin</label>
          <input class="form-control" type="date" name="f_fin">
          <label>Zona</label>
          <select class="form-control" type="text" name="zona" required>
            <option value="LATAM">LATAM</option>
            <option value="LATAM">LATAM</option>
            <option value="LATAM">LATAM</option>
            <option value="LATAM">LATAM</option>
            <option value="LATAM">LATAM</option>
          </select>
          <label>Tipo</label>
          <select class="form-control" type="text" name="tipo" required>
            <option value="Deportes">Deportes</option>
            <option value="Cine">Cine</option>
            <option value="Televisión">Televisión</option>
            <option value="Series">Series</option>
            <option value="Otro">Otro</option>
          </select>
          <label>Detalles</label>
          <textarea class="form-control" type="text" name="detalles" required>
</textarea>
        </form>
      </div>
      <div class="col-md-4">

      </div>
    </div>
  </div>


</body>

</html>