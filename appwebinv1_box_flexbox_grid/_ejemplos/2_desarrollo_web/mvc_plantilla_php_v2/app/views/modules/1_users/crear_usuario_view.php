<!-- Vista del Formulario para crear el Usuario -->
<h1><?php echo $datos['titulo']; ?></h1>
<form action="crear_usuario" method="post">
	<div>
		<label for="nombre_usuario">Nombre</label>
		<input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre">
	</div>	
	<div>
		<label for="email">Email</label>
		<input type="email" name="email_usuario" id="email_usuario" placeholder="Email">
	</div>
	<div>
		<label for="pass">Telefono</label>
		<input type="text" name="telefono_usuario" id="telefono_usuario" placeholder="Teléfono">
	</div>	
	<div>
		<br>
		<input id="crear_usuario" type="submit" value="Enviar">
	</div>
</form>