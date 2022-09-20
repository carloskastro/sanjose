Promedio materia.
Realice un algoritmo que cumpla con lo siguiente: Calcular el promedio final de la materia de Tecnología. Dicha calificación se compone de los siguientes porcentajes:
•	55% -----del promedio final de sus calificaciones parciales (3).
•	30% ----- de la calificación del examen
•	15% ----- de la calificación de un trabajo final
•	VARIABLE: P1, P2, P3, Prom, Examen, TrabajoF, Promfinal
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reto7</title>
</head>
<body>
	<form action="" method="post">
			<label>Notas Parciales: </label><br>
			<input type="number" name="p1" value="" placeholder="Digite Parcial 1"><br>
			<input type="number" name="p2" value="" placeholder="Digite Parcial 2"><br>
			<input type="number" name="p3" value="" placeholder="Digite Parcial 3"><br>
			<label>Nota Examen: </label><br>
			<input type="number" name="examen" value="" placeholder="Digite Nota Examen"><br>
			<label>Nota Trabajo Final: </label><br>
			<input type="number" name="trabajof" value="" placeholder="Digite Nota Trabajo Final"><br><br>
			<input type="submit" name="promfinal" value="Calcular Promedio">
			<input type="submit" name="limpiar" value="Limpiar">
		</form>
		<?php
			if (isset($_POST['promfinal'])) {
				$p1=$_POST['p1'];
				$p2=$_POST['p2'];
				$p3=$_POST['p3'];
				$prom=($p1+$p2+$p3)/3*0.55;

				$examen=$_POST['examen']*0.30;

				$trabajof=$_POST['trabajof']*0.15;

				$promfinal=$prom+$examen+$trabajof;
				echo "<br>Su promedio final es: <b>$promfinal";


			}
			if (isset($_POST['limpiar'])) {
			unset($resultado);
		}
		?>

</body>
</html>

