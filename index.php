<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form action="mail.php" method="post">

<label for="nombre"> Nombre: </label>
<input type="text" name="nombre">
<label for="apellido"> Apellido: </label>
<input type="text" name="apellido">
<label for="Email"> Email: </label>
<input type="text" name="Email">
<label for="celular"> Celular: </label>
<input type="text" name="celular">
<label for="asunto"> Asunto: </label>
<input type="text" name="asunto">
<label for="comentario"> Comentario: </label>
<textarea name="comentario" maxlength="100" cols="15" rows="3" ></textarea>
<input type="submit" value="Enviar">
</form>
</body>
</html>