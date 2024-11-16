<?php include './conexion.php' ?>
<html>
<head>
<meta charset="utf-8">
<title>Modificar</title>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<?php include './menu.php' ?>
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
$sql = "SELECT * FROM mascotas_op";
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
<td><a href="modificar_formulario.php?mod=<?php print
$row['id_mascota']; ?> ">Modificar</a></td>
<td><a href="eliminar.php?eli=<?php print $row['id_mascota']; ?>
">Eliminar</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>