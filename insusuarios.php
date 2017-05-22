<?php
//Recuperar datos del formulario
$dni=$_POST['dni'];
$cla=$_POST['clave'];
$perm=$_POST['permisos'];
$nomb=$_POST['nombre'];
$mail=$_POST['email'];

// Conectamos con la base de datos 
include("conexion.php");
// Creamos la consulta
$sql="INSERT INTO usuarios(dni,clave,permisos,nombre,email) 
	  VALUES ('$dni','$cla','$perm','$nomb','$mail')";

// Ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql.");
mysqli_close($conexion);
//redirige a la pagina
header("location:gestion.php");
?>