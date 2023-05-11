document.getElementById("myForm").addEventListener('submit', validar, false);

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
		swal({
			title: "Constraseña invalida!",
			text: "contraseña invalida!",
			icon: "warning",
			button: "Aceptar!",
			dangerMode: true,
		});
		evt.preventDefault();
	}
}

	// Diseñe un programa en JavaScript que:
	// Compare dos datos, y si son iguales
	// Escriba en consola del navegador
	// "Bienvenido", si no "Cuenta bloqueada"
	// Validar: Si tiene más de 3 intentos
	// indicar al usuario "Número de Intentos"


	// ¿Qué necesito saber para dar solución al anterior ejercicio?

	// Lógica de Programación --> Comprensión del Ejercicio 
	// --> Lógica matemáticas --> Ecuaciones y Proposiciones (Tablas de Verdad)

	// Conocimiento sobre Programación 
	// --> PE  
	// --> Estructuras condicionales y repetición

	//  Lenguaje de Programación
	// --> Sintaxis --> JavaScript!!!