<?php include("./conexion.php");
$sql = "UPDATE mascotas_op SET id_mascota='$_POST[id_mascota]',
nombre_mascota='$_POST[nombre_mascota]',tipo_mascota='$_POST[tipo_mascota]',raza_mascota='$_POST[
raza_mascota]',sexo_mascota='$_POST[sexo_mascota]', nombre_cliente='$_POST[nombre_cliente]',
fecha_mascota='$_POST[fecha_mascota]'";
$result = mysqli_query($link, $sql);
if (!mysqli_error($link)) {
?>
<script>
alert("Se modifico correctamente");
</script>
<?php } else { ?>
<script>
alert("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=modificar.php">