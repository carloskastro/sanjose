<?php  
if (is_array($data)) {
?>
<div class="p-5">
	

	<h1>Table de administradores</h1>
	<table class="table table-striped table-bordered table-hover" style="width:100%">
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