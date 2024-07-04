<?php
session_start();
require_once 'core/class.adm.php';
$admlogin = new adm();

if (isset($_POST['btnlogin'])) {
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);

    if ($admlogin->login($email, $pass)) {
        header('location: homead');
    }
}

?>
<!DOCTYPE html>
<html lang="es-CO" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Tags SEO-->
    <meta name="author" content="Carlos Andres Castro" />
    <meta name="description" content="Aplicativo para la IE San Jose" />
    <meta name="keywords" content="EVENTO,evento,Evento" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandhledFriendly" content="true" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar" content="black-traslucent" />

    <!--Favicon and title-->
    <title>San José</title>
    <link rel="icon" type="image/x-icon" href="../media/img/icon.png" />
    <link rel="apple-touch-icon" type="image/png" href="../media/img/icon.png" />

    <!--Styles Bootstrap 5.3.3-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

</head>

<body>
    <main class="form-signin m-auto pt-5">
        <!--Section Alerts-->
        <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Alerta!</strong> Usuario o contraseña incorrecta
            </div>
        <?php } ?>
        <!--Section Alerts-->
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="../media/img/logo.png" alt="Logo" width="72" height="72">
                    <h1 class="display-6">Inicio de Sesión</h1>
                </div>
                <form action="" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingrese email" name="email">
                    </div>
                    <div class="mb-3 password-wrapper">

                        <label for="pwd" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="password" placeholder="Ingrese contraseña"
                            name="pass">

                        <span class="input-group pt-2 toggle-button eye-icon" onclick="password_show_hide();">
                            <i class="bi bi-eye d-none" id="show_eye" style="font-size:20px"></i>
                            <i class="bi bi-eye-slash" id="hide_eye" style="font-size:20px"></i>
                        </span>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Recuerdame
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnlogin">Ingresar</button>
                    <a href="reg_adm">Registro del Admin</a>
                </form>
            </div>
        </div>

    </main>
    <footer class="bg-dark">
        <p class="my-5 text-center text-light" data-bs-toggle="tooltip" title="CACJX">Carlos Andres Castro - Copyright©
            2024</p>
    </footer>

    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/password.viewer.js"></script>
</body>

</html>