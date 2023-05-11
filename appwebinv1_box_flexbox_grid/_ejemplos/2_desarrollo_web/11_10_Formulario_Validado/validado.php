<html>
<head>
	<meta charset="utf-8">
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">

		<?php
			if(isset($_POST) && !empty($_POST)){

				$codigo=($_POST['txtCodigo']);
				$nombre=($_POST['txtNombre']);
				$apellido=($_POST['txtApellido']);
				$telefono=($_POST['txtTelefono']);
				$cedula=($_POST['txtCedula']);

				if(($codigo<0)||($cedula<0)||($telefono<0)||(is_numeric($nombre)) || is_numeric($apellido)){

					$mensaje="Ni el codigo, ni la cedula ni el telefono pueden tener valores negativos. Así como el nombre y el apellido no pueden tener valores numéricos";
					$class="alert alert-danger";

		?>
					<div class="<?php echo $class?>">
						<?php echo $mensaje;?>
					</div>  
		<?php
				}else{
					$mensaje="Datos validados correctamente";
					$class="alert alert-success";

		?>
					<div class="<?php echo $class?>">
						<?php echo $mensaje;?>
					</div>  
		<?php
				}
			}
		?>
		<form method="POST">
			<div class= "col-md-6">

				<h3>EJEMPLO DE FORMULARIO VALIDADO </h3>
				<div class="form-group">
					<label>Código</label>
					<input type="number" name="txtCodigo" class="form-control">
				</div>

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="txtNombre" class="form-control">
				</div>

				<div class="form-group">
					<label>Apellido</label>
					<input type="text" name="txtApellido" class="form-control">
				</div>


				<div class="form-group">
					<label>Direccion</label>
					<input type="text"name="txtDireccion"class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" name="btnconsultarusuario" class="btn btn-primary"> Registrar usuario</button>


				</div>
			</div>
			<div class="col-md-6">
				<br>
				<br>
				<br>
				<div class="form-group">
					<label>Correo electronico</label>
					<input type="e-mail"name="txtCorreo"class="form-control">
				</div>

				<div class="form-group">
					<label>Telefono</label>
					<input type="number"name="txtTelefono"class="form-control">
				</div> 

				<div class="form-group">
					<label>cedula</label>
					<input type="number"name="txtCedula"class="form-control">
				</div>
				<div class="form-group">
					<label>Fecha Nacimiento</label>
					<input type="date" name="fechaN"class="form-control">
				</div>
			</div>
		</form>
	</div>
</body>
</html>