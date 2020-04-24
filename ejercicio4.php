<?php

    // codigo de php

    // funciones para manipular cadenas strings con funciones

    // variable principal
    $mensaje = "Hola Mundo yo soy Gerson";
    // imprimir variable principal
    echo $mensaje;
    // longitud
    echo strlen($mensaje) . "<br/>";
    // numero de palabras
    echo str_word_count($mensaje) . "<br/>";
    // reversa
    echo strrev($mensaje). "<br/>";
    // encontrar texto
    echo strpos($mensaje, "Gerson") . "<br/>";
    // reemplazar texto
    echo str_replace("Hola" , "Que tal", $mensaje) . "<br/>";
    // minusculas
    echo strtolower($mensaje) . "<br/>";
    // mayusculas
    echo strtoupper($mensaje) . "<br/>";
    // comparar cadenas distancia de biets por medio de abecedario
    echo strcmp("hola", "adios") . "<br/>";;
    // substraer cadena
    echo substr($mensaje, 18) . "<br/>";
    // remover espacios en blanco
    echo trim("    Hola     Mundo") . "<br/>";


?>