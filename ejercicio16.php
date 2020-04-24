<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #5276af;
            height: 100%;
        }
        #container{
            background: white;
            margin: 100px auto;
            padding: 100px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div id="container">
        <?php 
            /*
                d dia
                a año
                y año 2 digitos
                Y año 4 digitos
                l dia de la semana
                m mes
                h hora
                i minutos
                s segundos
                a am-pm
            */ 

            $mes = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");


            echo "Fecha: " . date("l") . " " . date("d") . " de " . $mes[date("m")-1] . " de " . date("Y") . "<br/>";
            echo "Hora: " . date("h:i:sa");

        ?>        
    </div>


    
</body>
</html>