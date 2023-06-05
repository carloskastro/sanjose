<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - Administrador</title>
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
<body>
	<?php
	require_once 'conn.php';
	session_start();

	if (isset($_SESSION['adm'])) {
		$search=$conn->prepare('SELECT * FROM administrador WHERE idadministrador=?');
		$search->bindParam(1,$_SESSION['adm']);
		$search->execute();
		
		$data=$search->fetch(PDO::FETCH_ASSOC);
	}

	if (is_array($data)) {

	?>
	<header>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="../media/img/logo.png" alt="Logo Sena" style="width:40px;" class="rounded-pill"> 
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav me-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?page=tableadm">Administrador</a>
						</li>
					</ul>
					<div class="d-flex">
						<div class="dropdown">
							<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
								<?php echo $data['nombre']; ?>
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="logout">Salir</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<main class="pt-5">
		<?php
		$page= isset($_GET['page']) ? strtolower($_GET['page']) : 'homeadm';
		require_once './'.$page.'.php';

		?>
	</main>

<?php
}else{
	header('location: ./');
}
?>
</body>
</html>