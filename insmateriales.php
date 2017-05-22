<?php
//Recuperar datos del formulario
$apar=$_POST['aparato'];
$cat=$_POST['categoria'];
$prov=$_POST['proveedor'];
$marc=$_POST['marca'];
$mod=$_POST['modelo'];
$nser=$_POST['nserie'];
$cant=$_POST['cantidad'];
$fecEnt=$_POST['fcEntrada'];
$aut=$_POST['autorizacion'];
$gar=$_POST['garantia'];
$ubi=$_POST['ubicacion'];
$nint=$_POST['nInterno'];
$fecbaj=$_POST['fecbaja'];
$obs=$_POST['observaciones'];

//Recuperar datos del equipo informatico
$placa=$_POST['placa'];
$procesador=$_POST['procesador'];
$ram=$_POST['ram'];
$disco=$_POST['disco'];
$tarjetas=$_POST['tarjetas'];
$ip=$_POST['ip'];
$dominio=$_POST['dominio'];

//Recuperar datos del monitor
$tipomon=$_POST['tipom'];
$tamaño=$_POST['tamaño'];

//Recuperar datos de la impresora
$tipoimp=$_POST['tipoimp'];
$consumible=$_POST['consumible'];


// Conectamos con la base de datos 
include("conexion.php");
// Creamos la consulta
$sql="INSERT INTO material(aparato,categoria,proveedor,marca,modelo,nserie,cantidad,fechaEntrada,autorizadaPor,garantia,ubicacion,nInterno,fechaBaja,observaciones) 
	  VALUES ('$apar','$cat','$prov','$marc','$mod','$nser','$cant','$fecEnt','$aut','$gar','$ubi','$nint','$fecbaj','$obs')";
// Ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");

// recuperamos idreferencia de la base de datos
$id = mysqli_insert_id($conexion);
$sql2="INSERT INTO equiposinf(idReferencia, placa, procesador, ram, discoDuro, tarjetas, ip, dominio)
 VALUES('$id','$placa','$procesador','$ram','$disco','$tarjetas','$ip','$dominio')";
$sql3="INSERT INTO monitores(idReferencia, tamaño, tipo) VALUES('$id','$tamaño','$tipomon')";
$sql4="INSERT INTO impresoras(idReferencia, tipoImpresora, consumible) VALUES('$id','$tipoimp','$consumible')";
if ($cat=="ordenador") {
mysqli_query($conexion,$sql2) or die("Error en la consulta de insercion $sql2");
}
if ($cat=="monitor") {
mysqli_query($conexion,$sql3) or die("Error en la consulta de insercion $sql3");
}
if ($cat=="impresora") {
mysqli_query($conexion,$sql4) or die("Error en la consulta de insercion $sql4");
}

mysqli_close($conexion);
//redirige a la pagina
header("location:gestion.php");
?>