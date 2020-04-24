<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #5492D1;
            font-family: Arial;
        }
        #container{
            background: white;
            padding: 10px; 
            width: 400px;
            margin: 150px auto;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>

    <div id="container">
        <h2>Multiplicacion</h2>
        <form method="POST">
            <input type="text" name="numero01">
            <input type="text" name="numero02">
            <input type="submit" value="Calcular">
        </form>
        <?php
            include("ejercicio15MAX.php");
            validarCampos();
        ?>        
    </div>


    
</body>
</html>