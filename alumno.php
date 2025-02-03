<?php 
session_start();
include ('conexion.php');
if(isset($_SESSION['usuario'])){
    header('Content-Type: text/html; charset=UTF-8');
?>

<html>
    <head>
        <title>BIENVENIDOS</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/styles3.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- AJAX -->
        <script src="js/appalumno.js"></script> 

        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="img/rafael.png" class="img img-responsive img-rafel"><br><br>
                    <a href="#" class="btn btn-info" role="button">SINFO</a><br><br>
                    <a href="#" class="btn btn-info" role="button">Foros</a><br><br>
                    <a href="#" class="btn btn-info" role="button">Actividades</a><br><br>
                    <a href="#" class="btn btn-info" role="button">Noticias</a><br><br>
                    <a href="#" class="btn btn-info" role="button">Inscripciones</a><br><br>
                    <a href="#" class="btn btn-info" role="button">Contacto</a><br><br>
                </div>
                <div class="col-md-9">
                    <h1>IEP Rafael Mariscal Quintanilla</h1>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">ACADEMIA</a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li><a href="pagina.php">Inicio</a></li>
                                <li class="active"><a href="registro.php">Registro</a></li>
                                <li><a href="lista.php">Lista</a></li>
                                <li><a href="consulta.php">Consulta</a></li>
                            </ul>
                        </div>
                    </nav>

                    <div class="row mt-4">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Formulario para Registrar Alumno</h3>
                                    <form id="alumno-form">
                                        <input type="hidden" id="alumnoId">
                                        <div class="form-group">
                                            <label for="nombre">Nombre del Alumno:</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="apellido">Apellido del Alumno:</label>
                                            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ingrese el apellido" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="numero">Número de Teléfono:</label>
                                            <input type="number" id="numero" name="numero" class="form-control" placeholder="Ingrese el número del alumno" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="sexo">Sexo del Alumno:</label>
                                            <select id="sexo" name="sexo" class="form-control" required>
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">Registrar Alumno</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Número</th>
                                        <th>Fecha Nac</th>
                                        <th>Sexo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="alumnos">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-1">
                    <header>
                        <h4><small>Bienvenido </small><b><?php echo $_SESSION['usuario']; ?></b></h4>
                        <a href="logout.php" class="btn btn-danger" role="button">Cerrar sesión</a><br>
                    </header>                   
                </div>
            </div>
        </div> 

    </body>
</html>

<?php
    }
    else{
    echo '<script>window.location="index.php"; </script>';
    }
    $profile=$_SESSION['usuario'];
?>
