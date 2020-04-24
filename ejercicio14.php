<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container{
            width: 500px;
            margin: 150px auto;
        }
        #footer{
            background: #222 !important; 
            padding: 10px;
            color: white;
        }
        #menu{
            background: #eee;
            padding: 10px;
        }
    </style>
</head>
<body>
    <!-- codigo de php este codigo es sobre las funciones de include y require. -->
    <div id="container">
        <!-- include sirve para poder enlazar archivos entre si de php -->
        <?php 
            include("ejercicio14MAX.php");
        ?>    
        <h3>Contenido Principal.</h3>
        <?php 
            require("ejercicio14MIN.php");
        ?>    
    </div>

    <!--
        el include se utiliza se puede utilizar sin errores mas el require te proporcionara
        error y no mostrara el documento de codigo que creastes para que no te salgga eerror 
        recomiendo el codigo de include porque es mas utilizado y no te proporciona error
    -->

    
</body>
</html>