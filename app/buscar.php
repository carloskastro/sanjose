  <div class="py-5 text-center">
    <div class="card w-25">
      <div class="card-body">
       <form action="" method="post">
        <input type="text" class="form-control mb-2" name="buscar" required>
        <button type="submit" name="btnbuscar" class="btn btn-success">Buscar</button>
      </form>
    </div>
  </div>
</div>

<?php 

if (isset($_POST['btnbuscar'])) {

  $busqueda=$_POST['buscar'];
  $param = ["%$busqueda%"];
  $resultado = $conn->prepare('SELECT * FROM administrador WHERE nombre LIKE ?');
  //$resultado = $conn->prepare('SELECT * FROM administrador WHERE nombre LIKE ?',[PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
  $resultado->bindParam(1,$busqueda);
  $resultado->execute($param);


    // Verificar si se encontraron resultados
  if ($resultado->rowCount()>0) {
    ?>
    <div class='container mt-5 pt-5'><h2 style='background-color: black; color: white;'>Resultados para <?php echo $busqueda;?>:</h2>
      <!--Mostrar los resultados en una tabla (ajusta la estructura según tu base de datos)-->
      <table class="table table-dark table-striped table-bordered table-hover" style='width=100%;'>
        <thead>
          <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>

          <?php
          while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
              <td><?php echo $fila['documento'];?></td>
              <td><?php echo $fila['nombre'];?></td>
              <td><?php echo $fila['apellido'];?></td>
            </tr>
          <?php
          } 
          ?>
          </tbody>
        </table>
        
        <?php
       
        }else {
          echo "<p style='background-color: black; color: white;'>No se encontraron resultados para ".$busqueda.".</p>";
        }
      } 
  ?>
<?php
/*

// Verificar si se ha enviado una consulta de búsqueda
if (isset($_POST['btnbuscar'])) {
  $busqueda = $_POST['buscar'];
  // Conectar a la base de datos (ajusta los detalles según tu configuración)
  $conexion = mysqli_connect("127.0.0.1", "root", "", "sena");
  
  if ($conexion) {
    // Preparar la consulta SQL para buscar en la base de datos
    $consulta = "SELECT * FROM administrador WHERE nombre LIKE '%$busqueda%'";
    $resultado = mysqli_query($conexion, $consulta);
    // Verificar si se encontraron resultados
    if (mysqli_num_rows($resultado) > 0) {
      echo "<div class='container mt-5 pt-5'><h2 style='background-color: black; color: white;'>Resultados para '$busqueda':</h2>";
      // Mostrar los resultados en una tabla (ajusta la estructura según tu base de datos)
      echo "<table class='table table-dark table-striped table-bordered table-hover' style='width=100%'>
            <thead>
              <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Descripción</th>
              </tr>
            </thead>
            <tbody>";
      while ($fila = mysqli_fetch_assoc($resultado)) {
        // Embed the image using the <img> tag
        echo "<tr>
                <td>".$fila['documento']."</td>
                <td>".$fila['nombre']."</td>
                <td>{$fila['apellido']}</td>
              </tr>";
      }
      echo "</tbody></table>";
    } else {
      echo "<p style='background-color: black; color: white;'>No se encontraron resultados para ".$busqueda.".</p>";
    }
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
  } else {
    echo "<p style='background-color: black; color: white;'>Error al conectar a la base de datos.</p>";
  }
} */
?>
