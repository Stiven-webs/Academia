<?php
session_start();
?>
<html>
	<head>
		<title>BIENVENIDOS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body >
		<?php
			include('conexion.php');
				if(isset($_POST['login'])){
                    $entro=false;
					$usuario=$_POST['usuario'];
					$pw=$_POST['clave'];
                    $registros = "SELECT usuario FROM usuario WHERE usuario ='$usuario' AND clave='$pw'";
                    foreach($db->query($registros) as $fila) {  
                        session_start();
						$_SESSION["usuario"]=$fila['usuario'];
						echo '<script>alert("Usuario correcto"); </script>';
						echo '<script>window.location="pagina.php"; </script>';	
                    }
                    $db = null;
                    if (!$entro){
                        echo '<script>alert("Usuario incorrecto"); </script>';
						echo '<script>window.location="index.php"; </script>';	
                    }
				}
				if(isset($_POST['terminar'])){
				  echo '<script>window.location="index.php"; </script>';
				}
		?>
</body>
</html>
