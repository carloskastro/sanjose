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
						className: 'btn btn-primary',
						text: '<i class="bi bi-clipboard"></i>'
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
?>

<div class="container py-5">
	

	<h1>Table de administradores</h1>
	<table class="table table-striped table-bordered table-hover" id="tableresponsive" style="width:100%">
		<thead>
			<tr>
				<th>Documento</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>F Nacimiento</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result=$conn->prepare('SELECT * FROM administrador');
			$result->execute();

			while ($view = $result->fetch(PDO::FETCH_ASSOC)) {
			?>
			<tr>
				<td><?php echo $view['documento']; ?></td>
				<td><?php echo $view['nombre']; ?></td>
				<td><?php echo $view['apellido']; ?></td>
				<td><?php echo $view['fnac']; ?></td>
			</tr>
		<?php } ?>
		</tbody>
		
	</table>

</div>

<?php
}else{
	header('location: ./');
}
?>