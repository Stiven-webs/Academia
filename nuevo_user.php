<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="login-background">
        <div class="login-card">
            <div class="text-center">
                <img src="img/rafi.svg" class="logo" alt="Siatmedia">
                <h2>IEP Rafael Mariscal Quintanilla</h2>
                <h4>MATRÍCULA 2024</h4>
                <p>Complete el formulario para registrarse en la plataforma del colegio</p>
            </div>
            <hr>
            <h3 class="text-center mb-4">REGISTRARSE</h3>
            <form method="post" action="generacion_registrar.php">
                <div class="form-group mb-3">
                    <input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="clave" placeholder="Contraseña" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <input type="text" name="descripcion" placeholder="Descripción" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" name="register" class="btn btn-primary btn-block">Registrar</button>
                </div>
                <div class="text-center mt-4">
                    <a href="index.php" class="text-decoration-none">Volver al inicio de sesión</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
