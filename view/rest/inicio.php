<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="../src/js/jquery.js"></script>
	<script src="../src/js/materialize.min.js"></script>
	<title>Inicio</title>
</head>
<body class="grey lighten-2">
	<nav class="z-depth-2 teal" role="navigation">
		<div class="nav-wrapper container">
			<a href="#" class="brand-logo">Inicio</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="servicios.php"><i class="material-icons left">headset_mic</i>Servicios</a></li>
				<li><a href="menuplatilos/menuplatillos.php"><i class="material-icons left">restaurant_menu</i>Menu de platillos</a></li>
				<li><a href="pedidos/pedidos.php"><i class="material-icons left">room_service</i>pedidos</a></li>
				<li><a href="../controller/logout.php"><i class="material-icons right">directions_run</i>Cerrar sesión</a></li>
			</ul>
		</div>
	</nav>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col m12">
				<div class="card-panel white z-depth-3">
					<H3 align="center">Bienvenido</H3>
					<div class="row">
						<div class="col m4">
							<a href="servicios.php">
								<div class="card-panel amber darken-3 z-depth-5 center">
									<h4 class="white-text">Servicios</h4>
									<i class="material-icons center" style="font-size: 100px; color: black;">headset_mic</i>
								</div>
							</a>
						</div>
						<div class="col m4">
							<a href="proyectos/proyectos.php">
								<div class="card-panel amber darken-3 z-depth-5 center">
									<h4 class="white-text">Menu</h4>
									<i class="material-icons center" style="font-size: 100px; color: black;">restaurant_menu</i>
								</div>
							</a>
						</div>
						<div class="col m4">
							<a href="sesiones/sesiones.php">
								<div class="card-panel amber darken-3 z-depth-5 center">
									<h4 class="white-text">Pedidos</h4>
									<i class="material-icons center" style="font-size: 100px; color: black;">room_service</i>
								</div>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>

	</body>
	<script type="text/javascript">
	</script>
	</html>
