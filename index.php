<html>

<head>
  <title>Marketing Latino - Mio | Verda Luno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <p class="bg-danger" align="center"><b>
            <?php
            session_start();
            ob_start();

            if ($_SESSION['correcto'] == 1) {
                header('Location:dashboard.php');
            }

            if (isset($_SESSION['correcto'])) {
                if ($_SESSION['correcto'] == 2) {
                    echo 'Digíta ambos campos';
                }
                if ($_SESSION['correcto'] == 3) {
                    echo 'Datos incorrectos';
                }
                if ($_SESSION['correcto'] == 4) {
                    echo 'Gracias por tu visita.';
                }
            } else {
                $_SESSION['correcto'] = 0;
            }
            ?>
          </b></p>
        <form action="sesion.php" method="post">
          <label>Usuario</label>
          <input class="form-control" type="text" name="user">
          <label>Clave</label>
          <input class="form-control" type="password" name="clave">
          <input class="form-control" type="submit" name="btnStart" value="Iniciar Sesión">
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</body>

</html>