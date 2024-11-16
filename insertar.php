<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Insertar</title>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<?php include './menu.php' ?>
<form method="post" action="./insertar_logica.php">
<label id="id_mascota">ID: <input id="id_mascota" name="id_mascota"
type="text" required /></label>
<label id="nombre_mascota">Nombre de la mascota: <input id="nombre_mascota" name="nombre_mascota"
type="text" required /></label>
<label id="tipo_mascota">Tipo de mascota: <input id="tipo_mascota"
name="tipo_mascota" type="text" required /></label>
<label id="raza_mascota">Raza de mascota: <input id="raza_mascota"
name="raza_mascota" type="text" required /></label>
<label id="sexo_mascota">Sexo: <input id="sexo_mascota"
name="nombre_cliente" type="text" required /></label>
<label id="nombre_cliente">Nombre del cliente: <input id="nombre_cliente"
name="nombre_cliente" type="text" required /></label>
<label id="fecha">Fecha de nacimiento de la mascota: <input id="date" name="fecha"
type="date" required /></label>
<input id="registrar" name="Registrar" type="submit" />
<input id="limpiar" name="Limpiar" type="reset" />
</form>
</body>
</html>