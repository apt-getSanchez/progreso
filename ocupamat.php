<?php
include("conexion.php");
$cla=$_GET['clave'];
$sql="INSERT INTO bajas(idReferencia,aparato,categoria,marca,modelo,garantia,ubicacion,nInterno,observaciones) 
	  SELECT idReferencia,aparato,categoria,marca,modelo,garantia,ubicacion,nInterno,observaciones FROM material WHERE idReferencia='$cla'";
$sql2="DELETE FROM material WHERE idReferencia='$cla'";
mysqli_query($conexion,$sql) or die("Error en la insercion.");
mysqli_query($conexion,$sql2) or die("Error en el borrado");
mysqli_close($conexion);
header("location:disponible.php");

?>
