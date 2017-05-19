
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Base de Datos-Saleszar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript">	
	function mostrarFormularios(num) {
	if (num =="otro"){
		document.getElementById("otroform").style.visibility ='visible';}
	else if	(num =="ordenador"){
	document.getElementById("equiposinfform").style.visibility ='visible';}	
	else if	(num =="impresora"){
	document.getElementById("impresoraform").style.visibility ='visible';}				
	else if	(num =="monitor"){
	document.getElementById("monitorform").style.visibility ='visible';}		
	}	
	</script>
</head>

<body>
<?php
	include("conexion.php");
?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<img src="img/logo.png" width="300px"></img>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://zaragoza.salesianos.edu/">Pagina Principal</a>
                    </li>
					<li>
                        <a href="gestion.php">Salir</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h2 align="center">Dar de alta materiales.</h2>
				<br>
            </div>
        </div>
		
		<form name="materiales" align="center" method="post" action="insmateriales.php">
		<p>
			Aparato: <input type="text" name="aparato" id="aparato">
		</p>
		<p>
			Categoria: <select name="tipo" id="tipo" onchange="mostrarFormularios(this.value)">
							<option value="null"></option>
							<option value="monitor">Monitor</option>
							<option value="impresora">Impresora</option>
							<option value="equiposinf">Equipo Informatico</option>
							<option value="otro">Otro</option>
						</select>
		</p>
		<p>
			Proveedor: <input type="text" name="proveedor" id="proveedor">
		</p>
		<p>
			Marca: <input type="text" name="marca" id="marca">
		</p>
		<p>
			Modelo: <input type="text" name="modelo" id="modelo">
		</p>
		<p>
			Número de Serie: <input type="text" name="nserie" id="nserie">
		</p>
		<p>
			Cantidad: <input type="text" name="cantidad" id="cantidad">
		</p>
		<p>
			Fecha de Entrada: <input type="date" name="fcEntrada" id="fcEntrada">
		</p>
		<p>
			Autorizado Por: <select name="autorizacion" id="autorizacion">
				<?php
					$sql="SELECT * FROM usuarios";
					$registros=mysqli_query($conexion,$sql);
					while($linea=mysqli_fetch_array($registros)){
						echo"<option value='$linea[dni]'>$linea[nombre]";
					}
				?>
			</select>
		</p>
		<p>
			Garantia: <input type="text" name="garantia" id="garantia">
		</p>
		<p>
			Ubicacion: <input type="text" name="ubicacion" id="ubicacion">
		</p>
		<p>
			Numero Interno: <input type="text" name="nInterno" id="nInterno">
		</p>
		<p>
			Fecha Baja: <input type="date" name="fecbaja" id="fecbaja">
		</p>
		<p>
			Observaciones: <input type="text" name="observaciones" id="observaciones">
		</p>
		<p  id="saltamontes">
		
		</p>
		
		<div id="nullbait" style="visibility: hidden;">
		</div>
		
		<div id="otroform" align="center" style="visibility: hidden;">

		</div>
		
		<div id="impresoraform" align="center" style="visibility: hidden">
				<p>
				Tipo: <select name="tipoimp">
								<option value=""></option>
								<option value="tinta">Tinta</option>
								<option value="laser">Laser</option>
								<option value="3d">3D</option>
							</select>
				</p>
				<p>
				Consumibles: <input type="text" name="consumibles" id="consumibles" >
				</p>				
		</div>
		
		<div id="monitorform" align="center" style="visibility: hidden;" >
		    <p>
				Tamaño: <input type="text" name="tamaño" id="tamaño">
			</p>
		    <p>Tipo: <select name="tipom" id="tipom">
						<option value="lcd">LCD</option>
						<option value="led">LED</option>
						<option value="otro">Otro</option>
					</select>
          	</p>
		</div>		
			<input type="submit" class="btn btn-primary" value="Enviar">
			<a href="gestion.php" class="btn btn-primary">Volver</a>
		</form>

	<hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Salesianos Nuestra Señora del Pilar - Pagina realizada por Santiago Terreu y Jorge Sanchez - Abril 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
