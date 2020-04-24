<?php

    //codigo de php
    // tipos de datos (variables)

    /*
    
    caracter
    entero
    cadena
    flotante
    booleano
    arreglo 
    nulos
    
    */

    // caracter
    $letra = "G";
    // entero
    $numero = 45;
    // cadena
    $cadena = "Mi nombre es Gerson";
    // flotantes
    $decimal = 8.9999;
    // booleano
    $verdadero = true;
    // arreglo
    $carros = array("carro","camion","convertible");
    $edad = array(12, 2, 1, 34, 1);
    // nulos se utilia para inicializar una variable que no tenga nada
    $nada = null;

    echo $cadena . "<br/>";
    echo $decimal . "<br/>";
    // asi se imprime los array de un metodo convensional con print-r solo lanza informacion
    print_r($carros);






?>