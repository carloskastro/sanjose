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
    <?php

    session_start();
    require_once 'core/class.user.php';
    $reguser = new user();

    if (isset($_POST['reguser'])) {
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $pass = trim($_POST['pass']);

        $data = $reguser->runQuery("SELECT * FROM user WHERE email=:email");
        $data->execute(array(":email" => $email));
        $data->fetch(PDO::FETCH_ASSOC);

        if ($data->rowCount() > 0) {
            $msg = array("Disculpa, el email ya existe, utiliza otro", "danger");
        } else {
            if ($reguser->reguser($fname, $lname, $email, $pass)) {
                $msg = array("Datos Ingresados", "success");
            } else {
                $msg = array("Lo siento no se pudo guardar los datos", "danger");
            }
        }
    }
    ?>
    <main class="form-signin m-auto pt-5">
        <div class="card">
            <div class="card-body">

                <!--Section Alerts-->
                <?php if (isset($msg)) { ?>
                    <div class="alert alert-<?php echo $msg[1] ?> alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Success!</strong> <?php echo $msg[0] ?>
                    </div>
                <?php } ?>
                <!--Section Alerts-->

                <div class="text-center">
                    <img src="../media/img/logo.png" alt="Logo" width="72" height="72">
                    <h1 class="display-6">Registro de Usuario</h1>
                </div>
                <form action="" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="mb-3 mt-3">
                        <label for="fname" class="form-label">Nombres:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Ingrese sus nombres"
                            name="fname">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="lname" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Ingrese sus apellidos"
                            name="lname">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Correo:</label>
                        <input type="text" class="form-control" id="email" placeholder="Ingrese su email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="pass" placeholder="Ingreso su contraseña"
                            name="pass">
                    </div>
                    <div class="form-check mb-3 clearfix">
                        <label class="form-check-label float-end">
                            <a href="./">Iniciar Sesión</a>
                        </label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block" name="reguser">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-dark">
      <p class="my-5 text-center text-light" data-bs-toggle="tooltip" title="CACJX">Carlos Andres Castro - Copyright© 2024</p>
    </footer>

    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>