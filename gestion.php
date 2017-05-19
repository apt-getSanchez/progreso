
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
                        <a href="index.php">Salir</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
			 <h1 align="center">
				<?php
					include("conexion.php");
					session_start();
					echo "Bienvenido, $_SESSION[nombre]";
				?>
			 </h1>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Selecciona a donde quieres ir :</h3>
				<br>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/compra.jpg" alt="">
                    <div class="caption">
                        <h3>Dar de Alta Materiales</h3>
                        <p>Dar de alta materiales adquiridos, escogiendo su especialicazion.</p>
                        <p>
                            <a href="materiales.php" class="btn btn-primary">Acceder</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/dispo.png" alt="">
                    <div class="caption">
                        <h3>Materiales disponibles</h3>
                        <p>Comprueba los materiales disponibles en el centro.</p>
                        <p>
                            <a href="disponible.php" class="btn btn-primary">Acceder</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/nodisp.jpg" alt="">
                    <div class="caption">
                        <h3>Materiales no disponibles</h3>
                        <p>Materiales gastados o siendo utilizados por otro usuario.</p>
                        <p>
                            <a href="nodisponible.php" class="btn btn-primary">Acceder</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/ordenador.png" alt="">
                    <div class="caption">
                        <h3>Incidencias con el material</h3>
                        <p>Marca incidencias con los materiales utilizados.</p>
                        <p>
                            <a href="incidencias.php" class="btn btn-primary">Acceder</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
		
		<div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
				<div class="thumbnail">
					<img src="img/verinc.jpg" alt="">
					<div class="caption">
						<h3>Incidencias existentes</h3>
						<p>Visualizar las incidencias.</p>
						<p>
							<a href="verincidencias.php" class="btn btn-primary">Acceder</a>
						</p>
					</div>
				</div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/software.png" alt="">
                    <div class="caption">
                        <h3>Software Disponible</h3>
                        <p>Muestra el software disponible en el centro.</p>
                        <p>
                            <a href="softdisp.php" class="btn btn-primary">Acceder</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/software2.png" alt="">
                    <div class="caption">
                        <h3>Alta Software</h3>
                        <p>Dar de alta nuevo software adquirido.</p>
                        <p>
                            <a href="software.php" class="btn btn-primary">Acceder</a>
                        </p>
                    </div>
                </div>
            </div>
			
			<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/usuario.png" alt="">
                    <div class="caption">
                        <h3>Alta Usuarios</h3>
                        <p>Dar de alta un nuevo usuario con acceso a la base de datos.</p>
                        <p>
                            <a href="usuarios.php" class="btn btn-primary">Acceder</a>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row -->

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
