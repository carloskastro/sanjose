<!--Datatables Styles-->
<link rel="stylesheet" type="text/css" href="../assets/datatables/css/dataTables.bootstrap5.min.css">

<!--Datatables Buttons-->
<link rel="stylesheet" type="text/css" href="../assets/datatables/css/buttons.bootstrap5.css">

<!--Datatables Responsive-->
<link rel="stylesheet" type="text/css" href="../assets/datatables/css/responsive.dataTables.min.css">

<!--Datatables Scripts-->
<script type="text/javascript" src="../assets/datatables/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../assets/datatables/js/jquery.dataTables.min.js"></script>

<!--Datatables responsive script-->
<script type="text/javascript" src="../assets/datatables/js/dataTables.responsive.min.js"></script>

<!--Datatables Buttons Prints Script-->
<script type="text/javascript" src="../assets/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../assets/datatables/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="../assets/datatables/js/jszip.min.js"></script>
<script type="text/javascript" src="../assets/datatables/js/pdfmake.min.js"></script>
<script type="text/javascript" src="../assets/datatables/js/vfs_fonts.js"></script>
<script type="text/javascript" src="../assets/datatables/js/buttons.html5.js"></script>
<script type="text/javascript" src="../assets/datatables/js/buttons.print.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
			$('#tableresponsive').DataTable({
				dom: 'Bflrtip',
				buttons: [
					{//Botón Copy
						extend: 'copyHtml5',
						footer: true,
						titleAttr: 'Copiar',
						className: 'btn btn-outline-primary btn-md',
						text: '<i class="bi bi-clipboard"></i>'
					},
					{//Botón Excel
						extend: 'excelHtml5',
						footer: true,
						titleAttr: 'Excel',
						className: 'btn btn-outline-success btn-md',
						text: '<i class="bi bi-file-excel"></i>'
					},
					{//Botón Pdf
						extend: 'pdfHtml5',
						footer: true,
						titleAttr: 'PDF',
						className: 'btn btn-outline-danger btn-md',
						text: '<i class="bi bi-filetype-pdf"></i>'
					},
					{//Botón print
						extend: 'print',
						footer: true,
						titleAttr: 'Imprimir',
						className: 'btn btn-outline-info btn-md',
						text: '<i class="bi bi-printer"></i>'
					},
					],
				responsive: true,
				language: {
					url:'../assets/datatables/es-ES.json'
			},
		});
	});
</script>

<?php  
if (is_array($data)) {

/*eliminar datos de la tabla admin*/
$md=null;
$col=null;
if (isset($_GET['delete'])) {
	$delete = $conn->prepare('DELETE FROM administrador WHERE idadministrador=:id');
	$delete->bindParam(':id',$_GET['delete']);
	$delete->execute();
	if($delete){
		$md="Se eliminó con éxito";
		$col="success";
	}else{
		$md="Error al eliminar";
		$col="danger";
	}
}
/*eliminar datos de la tabla admin*/
?>

<div class="container py-5">
	<?php
	/*Confirmación de registro de datos*/
		if ($md!='' && $col!='') {
			?>
			<div class="alert alert-<?php echo $col; ?> alert-dismissible">
			<button type="button" class="btn-close" data-bs-dismiss="alert" onclick="location.href='homeadm?page=tableadm'"></button>
			<strong><?php echo $md; ?> !</strong>
			</div>';
		<?php
		}
	?>	

	<h1 class="text-center">Tabla Administradores</h1>
	<table class="table table-striped table-bordered table-hover text-center" id="tableresponsive" style="width:100%;">
		<thead>
			<tr>
				<th>Documento</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>F Nacimiento</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result=$conn->prepare('SELECT * FROM administrador WHERE idadministrador!=?');
			$result->bindParam(1,$data['idadministrador']);
			$result->execute();

			while ($view = $result->fetch(PDO::FETCH_ASSOC)) {
			?>
			<tr>
				<td><?php echo $view['documento']; ?></td>
				<td><?php echo $view['nombre']; ?></td>
				<td><?php echo $view['apellido']; ?></td>
				<td><?php echo $view['fnac']; ?></td>
				<td>
					<div class="btn-group">
						<!--Boton Editar-->
						<a href="" class="btn btn-outline-primary btn-md" title="Editar un Registro"><i class="bi bi-pencil-fill"></i></a>
						<!--Boton Eliminar-->
						<button type="button" data-bs-toggle="modal" data-bs-target="#eliminar<?php echo $view['idadministrador']; ?>" class="btn btn-outline-danger btn-md" title="Eliminar un Registro"><i class="bi bi-trash3-fill"></i></button>
					</div>
				</td>
			</tr>

			<!-- The Modal Eliminar registro-->
			<div class="modal fade" id="eliminar<?php echo $view['idadministrador']; ?>">
			  <div class="modal-dialog modal-dialog-centered">
			    <div class="modal-content">

			      <!-- Modal Header -->
			      <div class="modal-header">
			        <h4 class="modal-title">Mensaje de Alerta</h4>
			        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			      </div>

			      <!-- Modal body -->
			      <div class="modal-body">
			        Realmente desea eliminar el registro con documento:
			        <p><?php echo $view['documento'] ?></p>
			      </div>

			      <!-- Modal footer -->
			      <div class="modal-footer">
			      	<a href="homeadm?page=tableadm&delete=<?php echo $view['idadministrador']; ?>" class="btn btn-success" title="Confirmar">Confirmar</a>
			        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
			      </div>

			    </div>
			  </div>
			</div>
			<!-- The Modal Eliminar registro-->

		<?php } ?>
		</tbody>
		
	</table>

</div>

<?php
}else{
	header('location: ./');
}
?>