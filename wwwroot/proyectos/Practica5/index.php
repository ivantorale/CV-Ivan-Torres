<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Chat</title>
</head>
<body>
    <div id="contenedor">
        <div id="caja-chat">
            <div id="datos-chat">
                <span>Ivan: </span>
                <span>Hola, como estas</span>
                <span>15:06 </span>
            </div>
        </div>
        <form method="POST" action="index.php">
            <input type="text" name="nombre" placeholder="Ingresa tu nombre">
            <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</body>
</html>