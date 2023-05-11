<h2 class="text-center py-3">Crear Usuario</h2>
<form action="Controllers/user_controller.php" method="POST">
	<input type="hidden" name="action" value="create">
	<div class="form-group row">
		<label for="alias" class="col-sm-2 col-form-label text-right">Alias</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="alias" name="alias" placeholder="Pseudónimo">
		</div>
	</div>
	<div class="form-group row">
		<label for="nombres" class="col-sm-2 col-form-label text-right">Nombres</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres y Apellidos">
		</div>
	</div>
	<div class="form-group row">
		<label for="email" class="col-sm-2 col-form-label text-right">Email</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="email" name="email" placeholder="usuario@correo.com">
		</div>
	</div>
	<div class="row text-center">
		<div class="col">
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</div>
</form>