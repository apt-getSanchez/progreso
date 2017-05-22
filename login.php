<?php
session_start();
$dni=$_POST['dni'];
$cla=$_POST['clave'];

include ("conexion.php");

$sql="SELECT * FROM usuarios WHERE dni='$dni'";
$registros=mysqli_query($conexion,$sql);
$total=mysqli_num_rows($registros);
if($total==0){
	echo " <H2>Usuario no existe, pulse <a href=index.php>aqui</a> para continuar </H2>";}
else{
	while($linea=mysqli_fetch_array($registros)){
		if($linea['clave']==$cla){
			header("location:gestion.php");
			$_SESSION[dni]=$linea['dni'];
			$_SESSION[nombre]=$linea['nombre'];
		}
		else{
			echo " <H2>Clave incorrecta, pulse <a href=index.php>aqui</a> para continuar </H2>";
		}
	}
}
	
?>