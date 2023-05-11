window.addEventListener('DOMContentLoaded', inicio, false);

function inicio() {
	document.getElementById("myForm").addEventListener('submit', validar, false);
}

function validar(evt) {
	let user = document.getElementById("user").value;
	let pass = document.getElementById("pass").value;

	if (user == 'admin@correo.com' && pass == "12345") {
		window.location = 'app/index-admin.html';
		evt.preventDefault();
	} else if (user == 'cliente@correo.com' && pass == "12345") {
		window.location = 'app/index-cliente.html';
		evt.preventDefault();
	}
	else {
		alert("Usuario incorrecto");
		evt.preventDefault();
	}
}

$(document).ready(function() {
    $('#example').DataTable();
} );