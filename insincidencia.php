<?php
//Recuperar datos del formulario
$fecInc=$_POST['fechaIncidencia'];
$inc=$_POST['incidencia'];
$fecSol=$_POST['fechaSolucion'];
$sol=$_POST['solucion'];
$mat=$_POST['materialinc'];

// Conectamos con la base de datos 
include("conexion.php");
// Creamos la consulta
$sql="INSERT INTO incidencias(fechaIncidencia,incidencia,fechaSolucion,solucion,idMaterial) 
	  VALUES ('$fecInc','$inc','$fecSol','$sol','$mat')";
$sql2="INSERT INTO bajas(idReferencia,aparato,categoria,marca,modelo,garantia,ubicacion,nInterno,observaciones) 
	  SELECT idReferencia,aparato,categoria,marca,modelo,garantia,ubicacion,nInterno,'Averiado' FROM material 
	  WHERE idReferencia='$mat'";
$sql3="DELETE FROM material WHERE idReferencia='$mat'";

// Ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql.");
mysqli_query($conexion,$sql2) or die("Error en la insercion.");
mysqli_query($conexion,$sql3) or die("Error en el borrado.");
mysqli_close($conexion);
//redirige a la pagina
header("location:gestion.php");
?>