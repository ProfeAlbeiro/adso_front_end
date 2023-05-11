<?php require RUTA_APP . '/views/roles/0_business/header.php'; ?>
	<h1><?php echo $datos['titulo']; ?></h1>
	<form action="dashboardAdmin/index" method="post">
	<div>
		<label for="nombre_usuario">Usuario</label>
		<input type="text" id="nombre_usuario" placeholder="Usuario">
	</div>	
	<div>
		<label for="pass">Password</label>
		<input type="password" id="pass" placeholder="Password">
	</div>	
	<div>
		<br>
		<input type="submit" id="iniciar_sesion" value="Enviar">
	</div>
</form>
<?php require RUTA_APP . '/views/roles/0_business/footer.php'; ?>
