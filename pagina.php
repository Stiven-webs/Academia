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
        <link rel="stylesheet" href="css/styles2.css" />
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
           <div class="row">
                <div class="col-md-2">
                        <img src="img/rafael.png" class="img img-responsive img-rafel"><br><br> 
                        <a href="#" class="btn btn-info" role="button">SINFO</a><br> <br> 
                        <a href="#" class="btn btn-info" role="button">Foros</a><br><br> 
                        <a href="#" class="btn btn-info" role="button">Actividades</a><br> <br>
                        <a href="#" class="btn btn-info" role="button">Noticias</a><br> <br>
                        <a href="#" class="btn btn-info" role="button">Inscripciones</a> <br><br>
                        <a href="#" class="btn btn-info" role="button">Contacto</a> <br><br>
                </div>
                <div class="col-md-9">
                    <h1>IEP Rafael Mariscal Quintanilla </h1>
                   <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">ACADEMIA</a>
                            </div>
                                <ul class="nav navbar-nav">
                                <li class="active"><a href="pagina.php">Inicio</a></li>
                                <li><a href="registro.php">Registro</a></li>
                                <li><a href="lista.php">Lista</a></li>
                                <li><a href="consulta.php">Consulta</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Aulas</h3>
                            <img src="img/aula.jpg" class="img img-responsive">
                        </div>
                        <div class="col-md-4">
                             <h3>Calendario</h3>
                             <img src="img/calendario.jpg" class="img img-responsive">
                        </div>
                        <div class="col-md-4">
                             <h3>Horarios</h3>
                             <img src="img/horario.png" class="img img-responsive">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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