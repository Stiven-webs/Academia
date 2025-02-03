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
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- AJAX -->
        <script src="js/appcurso.js"></script>
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
                                    <h3>Formulario para Registrar Curso</h3>
                                    <form id="curso-form">
                                        <input type="hidden" id="cursoId">
                                        <div class="form-group">
                                            <label for="nombreCurso">Nombre del Curso:</label>
                                            <input type="text" id="nombreCurso" name="nombreCurso" class="form-control" placeholder="Ingrese el nombre del curso" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="nivelCurso">Nivel de Curso:</label>
                                            <select id="nivelCurso" name="nivelCurso" class="form-control" required>
                                                <option value="principiante">Principiante</option>
                                                <option value="intermedio">Intermedio</option>
                                                <option value="avanzado">Avanzado</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="precio">Precio del Curso:</label>
                                            <input type="number" id="precio" name="precio" class="form-control" placeholder="Ingrese el precio del curso" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">Registrar Curso</button>
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
                                        <th>Nivel</th>
                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="cursos">
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
