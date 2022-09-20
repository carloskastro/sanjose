<?php
/* 2. Algoritmo que nos salude dependiendo la hora
-Si la hora es entre las 6-12 Buenos días
-Si la hora es entre las 12-18 Buenas tardes
-Si la hora es entre las 6-6 buenas noches */

echo "*******************************<br>";
echo "*****Algoritmo Saludo*****<br>";
echo "*******************************<br>";
$t = 1;

if ($t > "6" && $t < "12") {
	echo "Buenos días!";
}elseif($t > "12" and $t < "18"){
	echo "Buenas tardes!";
}else{
	echo "Buenas noches <br>";
}

//Arreglos en PHP
$name = array("Andrés","Castro","Jaramillo","Carlos");

//echo "Mi Nombre es: ".$name[3]." ".$name[0]." ".$name[1]." ".$name[2];

//Matriz en PHP
$autos = array(
		array("Mazda","3","2.0"),
		array("Ford","Raptor","5.0"),
		array("BMW","M3","3.0"),
		array("Mercedes Benz","GLE","3.0"));

echo "<br>Marca "." Serie "." Cilindraje<br>";
echo $autos[0][0]." ".$autos[0][1]." ".$autos[0][2]."<br>";
echo $autos[1][0]." ".$autos[1][1]." ".$autos[2][2]."<br>";
echo $autos[2][0]." ".$autos[2][1]." ".$autos[2][2]."<br>";
echo $autos[3][0]." ".$autos[3][1]." ".$autos[3][2]."<br>";
?>