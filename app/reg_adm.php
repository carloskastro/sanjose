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
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>
<body>
	<header>
		
	</header>
	<main class="pt-5 pb-5 form-signin w-100 m-auto">
		formulario de registro de admin
		<form action="/action_page.php">
			<div class="mb-3 mt-3">
				<label for="email" class="form-label">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			</div>
			<div class="mb-3">
				<label for="pwd" class="form-label">Password:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
			</div>
			<div class="form-check mb-3">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="remember"> Remember me
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="./">Iniciar sesión</a>
		</form>

	</main>
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
</body>
</html>