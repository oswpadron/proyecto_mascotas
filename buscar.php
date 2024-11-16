<?php include './conexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<link rel="stylesheet" href="./style.css">
<title>Buscar</title>
</head>
<body>
<?php include './menu.php' ?>
<form method="POST" name="form1">
<div class="buscardor">
<label for="buscar">Cedula: </label>
<input type="text" name="buscar" id="buscar" />
<input type="submit" value="Buscar" />
</div>
</form>
<?php if (isset($_POST['buscar'])) { ?>
<table>
<tr>
<th>ID</th>
<th>NOMBRE</th>
<th>TIPO</th>
<th>RAZA</th>
<th>SEXO</th>
<th>NOMBRE DEL CLIENTE</th>
<th>FECHA DE NACIMIENTO DE LA MASCOTA</th>
</tr>
<?php
$sql = "SELECT * FROM usuarios WHERE cedula

='$_POST[buscar]'";
$result = mysqli_query($link, $sql); //ejecuto la consulta
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?= $row['id_mascota']; ?></td>
<td><?= $row['nombre_mascota']; ?></td>
<td><?= $row['tipo_mascota']; ?></td>
<td><?= $row['raza_mascota']; ?></td>
<td><?= $row['sexo_mascota']; ?></td>
<td><?= $row['nombre_cliente']; ?></td>
<td><?= $row['fecha_mascota']; ?></td>
</tr> <?php } ?>
</table> <?php } ?>
</body>
</html>