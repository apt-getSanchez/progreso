<?php
//Recuperar datos del formulario
$aparato=$_POST['apar'];
$categoria=$_POST['cat'];
$proveedor=$_POST['prov'];
$marca=$_POST['marc'];
$modelo=$_POST['mod'];
$nserie=$_POST['nser'];
$cantidad=$_POST['cant'];
$fcEntrada=$_POST['fecEnt'];
$garantia=$_POST['gar'];
// Conectamos con la base de datos 
include("conexion.php");
// Creamos la consulta
$sql="INSERT INTO solicitudes(aparato,categoria,proveedor,marca,modelo,nserie,cantidad,fechaEntrada,garantia) 
	  VALUES ('$apar','$cat','$prov','$marc','$mod','$nser','$cant,'$fecEnt','$gar')";
// Ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//redirige a la pagina
header("location:gestion.php");
?>