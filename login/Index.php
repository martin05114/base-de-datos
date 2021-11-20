<?php include ("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario" >
    <h1>Iniciar Sesion</h1>
    <form action="consultar.php"method="POST">
        
        
        <input type="text" id="usuario" name="usuario" placeholder="Ingresa el usuario">
<br>
<br>
        
        <input type="password" id="contra" name="contra" placeholder="Ingresa tu contraseña">
<br>
<br>
        <button id="enviar"name="Iniciar">Iniciar</button>
        <br>
        <span class="crear_cuenta"><a href="registro.php">Crear cuenta</a> </span>
    </form>
</div>

    
    <script src="javaScript/main.js"></script>
</body>
</html>

