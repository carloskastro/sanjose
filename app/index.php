<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Majosi</title>
	<meta name="theme-color" content="#000000">
	<meta name="MobileOptimized" content="width">
	<meta name="HandhledFriendly" content="true">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-traslucent">
	<!--Tags SEO-->
	<meta name="author" content="Majosi">
	<meta name="description" content="Aplicativo web para la enseñanda de Bootstrap">
	<meta name="keyworks" content="SENA, sena, Sena, Aplicativo, web, aplicativo">
	
	<!--Favicon-->
	<link href="../media/img/logo.png" rel="icon" type="image/x-icon">
	<link href="../media/img/logo.png" rel="apple-touch-icon" type="image/png">
	<link href="../media/img/logo.png" rel="apple-touch-startup-image" type="image/png">

	<!--Styles Bootstrap 5.3.0-alpha1-->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
	<!--Styles Bootstrap Icons-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
	<!--Styles Icons Fontawesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<body class="p-5">
	<?php
	require_once 'conn.php';
	session_start();

	if (isset($_POST['validar'])) {
		 //función para consultar info a la base de datos en SQL
		$result = $conn->prepare('SELECT * FROM estudiante WHERE user=?');
		$result->bindParam(1,$_POST['user']);
		$result->execute();

		$data = $result->fetch(PDO::FETCH_ASSOC);

		if (is_array($data)) {
			
			if ( password_verify($_POST['pass'],$data['pass']) ) {
				$_SESSION['adm'] = $data['idestudiante'];
				header('location: homeadm.php');
			} else {
				echo "Contraseña incorrecta";
			}
		}else{
			echo "Datos incorrectos";
		}
	}

	?>
	<main class="form-signin w-100 m-auto">

		<div class="card">
			<div class="card-header">
				<div class="text-center">
					<img class="mb-2" src="../media/img/logo.png" alt="Logo Sena" style="height: 48px">
					<span class="float-end">
						<a href="../"><i class="text-danger bi bi-x-circle-fill"></i>
						</a>
					</span>
					<h1 class="display-5 mb-0">Inicio de Sesión</h1>
					<div class="subheading-1 mb-2">ASEM</div>

				</div>
				<div class="card-body">
					<form action="" method="post" enctype="application/x-www-form-urlencoded">
						<div class="input-group mb-3 mt-3">
							<span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
							<input type="text" class="form-control"placeholder="Ingrese su usuario" name="user" aria-describedby="basic-addon1" required>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
							<input type="password" class="form-control"placeholder="Ingrese su contraseña" name="pass" required>
						</div>
						<div class="form-check mb-3">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="remember" required> Recuerdáme
							</label>
						</div>
						<button type="submit" class="w-100 btn btn-primary" name="validar">Entrar</button>
					</form>
				</div>
				<div class="card-footer bg-light">
					<div class="clearfix">
					  <span class="float-start"><a href="../">Volver</a></span>
					  <span class="float-end"><a href="reg_adm">Registrarse</a></span>
					</div>
				</div>

			</div>

		</main>

	</body>
	</html>