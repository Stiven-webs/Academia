<?php
include('conexion.php');

if (isset($_POST['register'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO usuario (usuario, clave, descripcion) VALUES (:usuario, :clave, :descripcion)";
    $stmt = $db->prepare($query);

    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':clave', $clave);
    $stmt->bindParam(':descripcion', $descripcion);

    if ($stmt->execute()) {
        echo '
        <div class="card shadow-lg" style="width: 24rem; margin: 50px auto; border-radius: 15px;">
            <div class="card-body" style="background-color: #f8f9fa;">
                <h5 class="card-title text-center" style="color: #28a745; font-weight: bold;">¡Registro Exitoso!</h5>
                <p class="card-text text-center" style="font-size: 1.1rem; color: #6c757d;">El usuario se ha registrado correctamente. Ahora puedes iniciar sesión en la plataforma.</p>
                <div class="text-center">
                    <a href="index.php" class="btn btn-success btn-lg" style="padding: 10px 20px; font-size: 1.1rem;">Volver al inicio de sesión</a>
                </div>
            </div>
        </div>';
    } else {
        echo '<div class="alert alert-danger text-center" role="alert" style="font-size: 1.2rem; padding: 15px 25px;">Error al registrar los datos. Por favor, inténtalo de nuevo.</div>';
    }
}
?>
