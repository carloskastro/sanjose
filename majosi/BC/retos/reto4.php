<?php
/*4. Realice un algoritmo que determine si un número es par o impar.*/
if (isset($_GET['calcular'])) {
    $num=$_GET['numero'];

    if ($num%2==0) {
        echo "El número ".$num." es Par";
    }else{
        echo "El número ".$num." es Impar";
    }
}
?>

<h2>Algoritmo para calcular si un número es par o impar</h2>
<form action="" method="get">
    <input type="number" name="numero" placeholder="Digite un número" required>
    <input type="submit" name="calcular" value="Calcular">
</form>