<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
			background-color: white;
			border-radius: 3px;
			color: #999;
			font-size: 0.8em;
			padding: 20px;
			margin: 0 auto;
			width: 300px;
		}

		input, textarea{
			border: 0;
			outline: none;

			width: 280px;
		}

		.field{
			border: solid 1px #ccc;
			padding: 10px;

			
		}

		.field:focus{
			border-color: #18A383;
		}

		.center-content{
			text-align: center;
		}
    </style>
</head>
<body>

    <!-- formulario -->
    <form action="ejercicio9MAX.php" id="form_session" method="post">
        <p>Correo electrónico:</p>
        <div class="field-container">
            <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>	
            <input name="usuario" type="text" class="field" placeholder="user@example.com"> <br/>
        </div>
        <p>Contraseña:</p>
        <div class="field-container">
            <i class="fa fa-key fa-lg" aria-hidden="true"></i>	
            <input name="password" type="password" class="field" placeholder="*******"> <br/>
        </div>
        <p class="center-content">
            <input type="submit" class="btn btn-green" value="Iniciar sesión"> <br/><br/>
            <a href="ejercicio9MIN.php?tipo_usuario=nuevo&navegador=chrome">Registra cuenta</a>
        </p>
    </form>	

</body>
</html>