<?php include "./conexion.php"; ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
<head>
<meta charset="utf-8">
<title>Modificar Formulario</title>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
$sql = "SELECT * FROM mascotas_op WHERE id_mascota ='$_GET[mod]'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>
<form id="form1" name="form1" method="post"
action="modificar_logica.php">
<label for="textfield">ID: <input type="text" name="id"
id="id" value="<?php print $row['id_mascota']; ?>" /></label>
<label for="textfield2">Nombre de la mascota: <input type="text" name="nombre"
id="nombre" value="<?php print $row['nombre_mascota']; ?>" /></label>
<label for="textfield3">Tipo de mascota <input type="text"
name="tipo_mascota" id="tipo_mascota" value="<?php print $row['tipo_mascota'];
?>" /></label>
<label for="textfield3">Raza: <input type="text" name="raza"
id="raza" value="<?php print $row['raza_mascota']; ?>" /></label>
<label for="textfield3">Sexo: <input type="text" name="sexo"
id="sexo" value="<?php print $row['sexo_mascota']; ?>" /></label>
<legend>Sexo:</legend>
<?php if ($row['sexo'] == 'F') { ?>
<input type="radio" name="sexo" value="F" id="F" checked="checked"
/>
<?php } else { ?> <input type="radio" name="sexo" value="F" id="F"
/><?php } ?>
<label for="F">Femenino</label>
<?php if ($row['sexo'] == 'M') { ?>
<input type="radio" name="sexo" value="M" id="M" checked="checked"
/>

<?php } else { ?> <input type="radio" name="sexo" value="M" id="M"
/><?php } ?>
<label for="M">Masculino</label>
</label>
<label for="textfield3">Nombre del cliente: <input type="text" name="nombre_cliente"
id="nombre_cliente" value="<?php print $row['nombre_cliente']; ?>" /></label>
<input type="hidden" name="oculto" id="oculto" value="<?php print
$row['id_mascota']; ?>" />
<input type="submit" name="submit" id="submit" value="Enviar">
</form>
</body>
</html>