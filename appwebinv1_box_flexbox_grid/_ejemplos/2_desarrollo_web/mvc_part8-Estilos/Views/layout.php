<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>layout</title>
	<link rel="stylesheet" href="Views/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<!-- Navegador -->
		<div class="row">
			<nav class="col navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="?controller=user&action=main">Inicio <span class="sr-only">(current)</span></a>
						</li>
					</ul>
					<ul class="form-inline my-2 my-lg-0">						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Administrador
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Salir</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- Sección Principal -->
		<div class="row">
			<!-- Barra lateral -->
			<div class="col-3 p-0">
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn" type="button" data-toggle="" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									USUARIOS
								</button>
							</h2>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								<ul>
									<li><a href="?controller=user&action=create">Crear Usuario</a></li>
									<li><a href="?controller=user&action=read">Consultar Usuarios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn" type="button" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									VENTAS
								</button>
							</h2>
						</div>

						<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
								<ul>
									<li><a href="?controller=sale&action=create">Crear Venta</a></li>
									<li><a href="?controller=sale&action=read">Consultar Ventas</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Contenido -->
			<div class="col-9 border">
				<?php
				require_once 'Controllers/routes_controller.php';
				?>
			</div>
		</div>
		<div class="row">
			<div class="col border py-2 bg-dark text-right text-white">Footer</div>
		</div>
	</div>
	<script src="Views/js/jquery-3.3.1.slim.min.js"></script>
	<script src="Views/js/popper.min.js"></script>
	<script src="Views/js/bootstrap.min.js"></script>
</body>
</html>