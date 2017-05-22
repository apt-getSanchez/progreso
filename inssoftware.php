<?php
//Recuperar datos del formulario
$nomb=$_POST['nombre'];
$tip=$_POST['tipo'];
$cant=$_POST['cantidad'];
$fecFin=$_POST['fechaFin'];
$obs=$_POST['observaciones'];

// Conectamos con la base de datos 
include("conexion.php");
// Creamos la consulta
$sql="INSERT INTO software(nombre,tipoLicencia,cantidad,fechaFin,observaciones) 
	  VALUES ('$nomb','$tip','$cant','$fecFin','$obs')";
// Ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//redirige a la pagina
header("location:gestion.php");
?>