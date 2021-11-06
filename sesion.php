<?php
session_start();
ob_start();

if (isset($_POST['btnStart'])) {
    $_SESSION['correcto'] = 0;

    $user = $_POST['user'];
    $clave = $_POST['clave'];

    if ($user == '' || $clave == '') {
        $_SESSION['correcto'] = 2; //2 sera error de campos vacios
        header('Location:index.php');
    } else {
        include 'conectar.php';
        $_SESSION['correcto'] = 3; //2 seran datos incorrectos

        $resultados = mysqli_query(
            $conexion,
            "SELECT * FROM users WHERE user = '$user' AND clave = '$clave'"
        );
        while ($consulta = mysqli_fetch_array($resultados)) {
            $_SESSION['correcto'] = 1;

            $_SESSION['nombre'] =
                $consulta['nombre'] . ' ' . $consulta['apellido'];
            $_SESSION['user'] = $consulta['user'];
            $_SESSION['rol'] = $consulta['rol'];

            header('Location:dashboard.php');
        }
    }

    include 'desconectar.php';
}
if ($_SESSION['correcto'] != 1) {
    header('Location:index.php');
}
?>