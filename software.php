
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
                <h2 align="center">Dar de alta Licencias de Software.</h2>
				<br>
            </div>
        </div>
		
		<form name="software" align="center" method="post" action="inssoftware.php">
		<p>
			Nombre: <input type="text" name="nombre" id="nombre">
		</p>
		<p>
			Tipo: <select name="tipo" >
			<option value="Free"> Free </value>
			<option value="Pago"> Pago </value>
			</select>
		</p>
		<p>
			Cantidad: <input type="text" name="cantidad" id="cantidad">
		</p>
		<p>
			Fecha de Vencimiento: <input type="date" name="fechaFin" id="fechaFin">
		</p>
		<p>
			Observaciones: <input type="text" name="observaciones" id="observaciones">
		</p>
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
