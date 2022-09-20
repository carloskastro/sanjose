<?php
/*6. Ejercicio de los colores aplicando Switch*/
echo "*******************************<br>";
echo "*****Algoritmo Switch*****<br>";
echo "*******************************<br>";
$color = 'amarillo';

switch ($color) {
	case 'rojo':
		echo "El rojo es el color de la sangre";
		break;

	case 'azul':
		echo "El azul es el color del cielo";
		break;

	case 'amarillo':
		echo "El amarillo es el color del sol";
		break;
	
	default:
		echo "El color no existe";
		break;
}
echo "<br>*************************<br>";
?>