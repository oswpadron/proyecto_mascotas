<?php
include "./conexion.php";
$sql="INSERT INTO mascotas_op VALUES
('$_POST[id_mascota]','$_POST[nombre_mascota]','$_POST[tipo_mascota]',
'$_POST[raza_mascota]','$_POST[sexo_mascota]','$_POST[nombre_cliente]','$_POST[fecha_mascota]')";
$result = mysqli_query($link, $sql); //ejecuto la consulta
if (!mysqli_error($link)) {
?>
<script>
alert("Se ingreso con total normalidad");
</script>
<?php
}else{
?>
<script>
alert ("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=insertar.php">