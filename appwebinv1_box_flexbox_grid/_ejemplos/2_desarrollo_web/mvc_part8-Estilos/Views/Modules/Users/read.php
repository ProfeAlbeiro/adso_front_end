<h2 class="text-center py-3">Consultar Usuarios</h2>
<table class="table">
	<thead class="thead-dark text-center">
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Alias</th>
			<th scope="col">Nombres</th>
			<th scope="col">Email</th>
			<th scope="col" colspan="2">Acciones</th>
		</tr>
	</thead>
	<tbody>
<?php 
foreach ($users as $userDto) { ?>
		<tr>
			<th scope="row"><?php echo $userDto->getId(); ?></th>
			<td><?php echo $userDto->getAlias(); ?></td>
			<td><?php echo $userDto->getNombres(); ?></td>
			<td><?php echo $userDto->getEmail(); ?></td>
			<td><a href="?controller=user&action=update&id=<?php echo $userDto->getId() ?>">Actualizar</a></td>
			<td><a href="?controller=user&action=delete&id=<?php echo $userDto->getId() ?>">Eliminar</a></td>
		</tr>
<?php } ?>
		
	</tbody>
</table>