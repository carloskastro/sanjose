<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formulario
 *
 * @author Estudiantes
 */
class Tablero {
    var $fichas=array();
    
    function inicializarFichas(){
        foreach ($this->fichas as $indice=>$valor){
            
        }
    }
    
    function verificarTriqui(){
        
        if($_REQUEST["ficha1"]==$_REQUEST["ficha2"]&&$_REQUEST["ficha1"]==$_REQUEST["ficha3"]){
            
            echo "Hubo triqui en la fila 1";
        }else{
            
            echo "No Hubo triqui en la fila 1";
        }
        /*
        if($_REQUEST["ficha4"]==$_REQUEST["ficha5"]&&$_REQUEST["ficha4"]==$_REQUEST["ficha6"]){
            
            echo "Hubo triqui en la fila 2";
        }else{
            
            echo "No Hubo triqui en la fila 2";
        }
        if($_REQUEST["ficha7"]==$_REQUEST["ficha8"]&&$_REQUEST["ficha7"]==$_REQUEST["ficha9"]){
            
            echo "Hubo triqui en la fila 3";
        }else{
            
            echo "No Hubo triqui en la fila 3";
        }*/
    }
    //put your code here
}

$miTablero=new Tablero();
$miTablero->verificarTriqui();