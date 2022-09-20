Solicitar un entero y determinar sí es múltiplo de 3 y además que se encuentre en el rango (100-200).
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reto 8</title>
</head>
<body>
	<form action="" method="post">
			<label>Digite número: </label><br>
			<input type="number" name="numero" value="" placeholder="Digite Parcial 1"><br>
			<input type="submit" name="verificar" value="Verificar Número">
			<input type="submit" name="limpiar" value="Limpiar">
		</form>
		<?php
			if (isset($_POST['verificar'])) {
				$numero=$_POST['numero'];
				if(($numero%3)==0){
					echo "<br>El número <b>$numero es multiplo de 3 </b>";
				}else{
					echo "<br>El número <b>$numero no es multiplo de 3 </b>";
				}
				if ($numero>=100 && $numero<=200) {
					echo " y está en el rango de 100 a 200.";
				}else{
					echo " y no está en el rango de 100 a 200.";
				}
			}
			if (isset($_POST['limpiar'])) {
				unset($resultado);
			}
		?>

</body>
</html>