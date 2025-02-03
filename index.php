<?php
session_start();
include ('conexion.php');

if (isset($_SESSION['user'])) {
    echo '<script>window.location="pagina.php";</script>';
    exit();
}
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio - Inicio de Sesión</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="login-background">
        <div class="login-card">
            <div class="text-center">
                <img src="img/rafi.svg" class="logo" alt="Siatmedia">
                <h2>IEP Rafael Mariscal Quintanilla</h2>
                <h4>MATRÍCULA 2024</h4>
                <p>Ingrese a la plataforma del colegio</p>
            </div>
            <hr>
            <h3 class="text-center mb-4">INICIAR SESIÓN</h3>
            <form method="post" action="validar.php">
                <div class="form-group mb-3">
                    <input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <input type="password" name="clave" placeholder="Contraseña" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" name="login" class="btn btn-primary btn-block">Ingresar</button>
                </div>
                <div class="text-center mt-4">
                    <a href="nuevo_user.php" class="text-decoration-none">Registrarse</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
