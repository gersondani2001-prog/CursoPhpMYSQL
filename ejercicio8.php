<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #85CDE6;
            font-family: Arial;
            font-size: 4em;
            padding: 50px;
        }
    </style>
</head>
<body>
    
    <?php

        $frutas = array("platano","manzana","uvas","fresa");

        echo $frutas[3] . "<br>";

        echo count($frutas) . " elementos" . "<br>";

        for($i = 0; $i < count($frutas); $i++){
            echo $frutas[$i] . "<br>";
        }

        $edades = array("Gerson" => 18, "Tania" => 23);

        foreach($edades as $key => $value){
            echo $key . " tiene el valor de " . $value  . "<br>";
        }

    ?>


</body>
</html>