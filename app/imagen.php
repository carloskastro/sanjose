/*----subir imagen al servidor--------*/
    $temp->bindParam(':imagen',$ruta);
    $nombreimg=$_FILES['imagen']['name'];
    $archivo=$_FILES['imagen']['tmp_name'];
    $ruta='ad_img/'.$nombreimg;
    move_uploaded_file($archivo, $ruta);
/*----subir imagen al servidor--------*/

<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
