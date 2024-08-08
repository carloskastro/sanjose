<?php
session_start();
require_once 'core/class.adm.php';
$loginadm = new adm();

if (!$loginadm->logged_in()) {
    $loginadm->redirect('./');
}

$stmt = $loginadm->runQuery("SELECT * FROM adm WHERE idadm=:idadm");
$stmt->execute(array(":idadm" => $_SESSION['admsession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);


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
    <header>
      
        <!-- The Modal logout-->
        <div class="modal fade" id="logout">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Alerta</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Realmente desea salir?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="location.href='logout'">Aceptar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- The Modal logout-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="homead">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pg=files_adm">Publicaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pg=perfilad">Perfil</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#logout">Salir</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container py-5 mt-5">

        <?php  
                
        $page = isset($_GET['pg']) ? strtolower($_GET['pg']) :'homead';
        require_once './'. $page .'.php';
        
        ?>

    </main>
    <footer class="bg-dark">
        <p class="my-5 text-center text-light" data-bs-toggle="tooltip" title="CACJX">Carlos Andres Castro - Copyright©
            2024</p>
    </footer>

    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/password.viewer.js"></script>
</body>

</html>