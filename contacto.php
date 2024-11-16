<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./style.css">
<title>Contacto</title>
</head>
<body>
<?php include './menu.php' ?>
<form method="post" action="./correo.php">
<label id="id_mascota">Nombre de tu mascota: <input id="id" name="mascota"
type="Nombre" required /></label>
<label id="tipo">Tipo de mascota: <input id="tipo" name="mascota" type="text"
required /></label>
<label id="raza">Raza: <input id="raza" name="raza_mascota"
type="text" required /></label>
<label id="sexo">Sexo de tu mascota: <input id="sexo" name="mascota"
type="Sexo" required /></label>
<label id="Nombre_cliente">Nombre del cliente: <input id="nombre" name="nombre_cliente"
type="nombre" required /></label>
<label id="fecha">Fecha de nacimiento de la mascota: <input id="date" name="fecha"
type="date" required /></label>
<input id="submit" name="Enviar" type="submit" />
<input id="limpiar" name="Limpiar" type="reset" />
</form>
</body>
</html>