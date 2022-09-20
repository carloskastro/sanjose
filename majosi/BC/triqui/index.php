<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
    </head>
    <body>
        <form action="Tablero.php">
	
	
            
            <label id="eti">Digite x o y: <br></label><br>
            <?php
            for ($i=1;$i<10;$i++){
            
                echo '<input class="ficha" type="text" id="digitar" name="ficha'.($i).'" >';
                if($i%3==0){
                    echo "<br>";
                }
            }
            ?>
            
            
            
            <input type="submit" value="Aceptar">
	


</form>   
    </body>
</html>
