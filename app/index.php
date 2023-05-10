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
	<link href="../media/img/logo1.png" rel="icon" type="image/x-icon">
	<link href="../media/img/logo1.png" rel="apple-touch-icon" type="image/png">
	<link href="../media/img/logo1.png" rel="apple-touch-startup-image" type="image/png">

	<!--Styles Bootstrap 5.3.0-alpha1-->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
	<!--Styles Bootstrap Icons-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
	<!--Styles Icons Fontawesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<body>
	<main class="form-signin w-100 m-auto">

		<div class="card">
			<div class="card-header">
				<div class="text-center">
					<img class="mb-2" src="../media/img/logo1.png" alt="Logo Sena" style="height: 48px">
					<span class="float-end">
						<a href="../"><i class="text-danger bi bi-x-circle-fill"></i>
						</a>
					</span>
					<h1 class="display-5 mb-0">Inicio de Sesión</h1>
					<div class="subheading-1 mb-2">ASEM</div>

				</div>
				<div class="card-body">
					<form action="/action_page.php">
						<div class="input-group mb-3 mt-3">
							<span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
							<input type="user" class="form-control" id="user" placeholder="Ingrese su usuario" name="user" aria-describedby="basic-addon1">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
						</div>
						<div class="form-check mb-3">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="remember"> Remember me
							</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						<a href="../">Volver</a>
						<a href="reg_adm">Registrarse</a>
					</form>
				</div>
				<div class="card-footer">
					<footer class="text-center text-white pt-5">
						<!-- Grid container -->
						<div class="container p-4 pb-0">
							<!-- Section: Social media -->
							<section class="mb-4">
								<!-- Facebook -->
								<a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

								<!-- Twitter -->
								<a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!"	role="button"><i class="fab fa-twitter"></i></a>

								<!-- Google -->
								<a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

								<!-- Instagram -->
								<a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!"	role="button"><i class="fab fa-instagram"></i></a>

								<!-- Linkedin -->
								<a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!"	role="button"><i class="fab fa-linkedin-in"></i></a>

								<!-- Github -->
								<a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!"	role="button"><i class="fab fa-github"></i></a>
							</section>
							<!-- Section: Social media -->
						</div>
						<!-- Grid container -->

						<!-- Copyright -->
						<div class="text-center p-3 bg-dark">
							© 2023 Copyright:
							<a class="text-white" href="https://mdbootstrap.com/">Majosi</a>
						</div>
						<!-- Copyright -->
					</footer>
				</div>

			</div>

		</main>

	</body>
	</html>