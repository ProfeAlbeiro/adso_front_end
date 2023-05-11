function crear_usuario(){
	swal({
		title: "Usuario Creado correctamente!",
		text: "Para verificar consulte la lista de usuarios",
		icon: "success",
		button: "Aceptar",
	});
}
function actualizar_usuario(){
	alert("Usuario actualizado correctamente");
}
function eliminar_usuario(){
	swal({
		title: "Está seguro de eliminar el usuario?",
		text: "Después de elimnar, ya no recuperará la información",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("El usuario ha sido eliminado satisfactoriamente", {
				icon: "success",
			});
		} else {
			swal("No se eliminó el usario");
		}
	});
}
function imprimir(){
	window.print();
}