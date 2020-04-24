<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #E85F79;
            text-align: center;
        }
        img{
            width: 500px;
            height: 500px;
        }
    </style>
</head>
<body>
    <!-- codigo de ciclo de for -->
    <?php
        for($i=0; $i<10; $i++){
    ?>   
    <img src="https://miracomohacerlo.com/wp-content/uploads/2018/11/como-guardar-o-descargar-imagenes-desde-google-imagenes-2-1024x683.jpg" alt="logo"> 
    <?php
        }    
    ?>

    <!-- ciclo while  -->
    <?php
        while(rand(1,10) != 5 ){
    ?>
    <img src="https://as.com/meristation/imagenes/2019/06/10/betech/1560195710_365328_1560195771_noticia_normal.jpg" alt="logo">
    <?php
        }
    ?>



</body>
</html>