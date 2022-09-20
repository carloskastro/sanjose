<?php
/*5.Calcular el mayor de dos números enteros, se debe tener en cuenta el caso donde los números son iguales.*/
echo "*******************************<br>";
echo "*****Algoritmo mayor o menor*****<br>";
echo "*******************************<br>";

$num1=7;
$num2=5;
if ($num1 < $num2) {
	echo "Entre $num1 y $num2 el mayor es ".$num2;
} elseif ($num2 < $num1) {
	echo "Entre $num2 y $num1 el mayor es ".$num1;
} else {
	echo "Los números son iguales";
}
echo "<br>";

?>