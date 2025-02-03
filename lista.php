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
                    <h1>IEP Rafael Mariscal Quintanilla </h1>
                   <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">ACADEMIA</a>
                            </div>
                                <ul class="nav navbar-nav">
                                <li><a href="pagina.php">Inicio</a></li>
                                <li><a href="registro.php">Registro</a></li>
                                <li class="active"><a href="lista.php">Lista</a></li>
                                <li><a href="consulta.php">Consulta</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Lis-Alumnos</h3>
                            <img src="img/listaalumno.jpeg" class="img img-responsive">
                            <p align="center"><a href="listado/listadoalumno.php">Ingresar</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Lis-Profesores</h3>
                             <img src="img/listaprofesor.jpg" class="img img-responsive">
                             <p align="center"><a href="listado/listadoprofesor.php">Ingresar</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Lis-Cursos</h3>
                             <img src="img/listacurso.avif" class="img img-responsive">
                             <p align="center"><a href="listado/listadocurso.php">Ingresar</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Lis-Cronograma</h3>
                             <img src="img/listacronograma.jpeg" class="img img-responsive">
                             <p align="center"><a href="listado/listadocronograma.php">Ingresar</a></p>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-1">
                    <header>
                        <h4><small>Bienvenido </small><b><?php echo $_SESSION['usuario']; ?></b></h4>
                        <a href="logout.php" class="btn btn-danger" role="button">Cerrar sesión</a> <br>

					</header>                   

                </div>
            </div>
        </div>
        <div class="container">
           <div class="row">
               <div class="col-md-12">
                   				
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