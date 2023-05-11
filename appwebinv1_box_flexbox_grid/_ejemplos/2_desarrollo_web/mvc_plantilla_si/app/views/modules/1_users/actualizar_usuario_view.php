<!-- Vista del Formulario para crear el Usuario -->
<h1><?php echo $datos['titulo']; ?></h1>
<form action="<?php echo '../actualizar_usuario/'.$datos['id_usuario']; ?>" method="post">
	<div>
		<label for="nombre_usuario">Nombre</label>
		<input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre" value="<?php echo $datos['nombre_usuario']; ?>">			
	</div>	
	<div>
		<label for="email">Email</label>
		<input type="email" name="email_usuario" id="email_usuario" placeholder="Email" value="<?php echo $datos['email_usuario']; ?>">
	</div>
	<div>
		<label for="pass">Telefono</label>
		<input type="text" name="telefono_usuario" id="telefono_usuario" placeholder="Telefono" value="<?php echo $datos['telefono_usuario']; ?>">
	</div>	
	<div>
		<br>
		<input id="actualizar_usuario" type="submit" value="Enviar">
	</div>
</form>