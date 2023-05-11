<h2 class="text-center py-3">Actualizar Usuario</h2> 
<form action="Controllers/user_controller.php" method="POST">
	<input type="hidden" name="action" value="update">
	<input type="hidden" name="id" value="<?php echo $userDto->getId() ?>">
	<div class="form-group row">
		<label for="alias" class="col-sm-2 col-form-label text-right">Alias</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="alias" name="alias" value="<?php echo $userDto->getAlias() ?>">
		</div>
	</div>
	<div class="form-group row">
		<label for="nombres" class="col-sm-2 col-form-label text-right">Nombres</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $userDto->getNombres() ?>">
		</div>
	</div>
	<div class="form-group row">
		<label for="email" class="col-sm-2 col-form-label text-right">Email</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="email" name="email" value="<?php echo $userDto->getEmail() ?>">
		</div>
	</div>
	<div class="row text-center">
		<div class="col">
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</div>
	</div>
</form>