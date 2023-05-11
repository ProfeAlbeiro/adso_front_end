
function validar(){
	let email = document.getElementById('emailIngreso').value;
	let pass = document.getElementById('passIngreso').value;

	if (email == 'admin@correo.com' && pass == "12345") {
		window.location = 'si/admin/indexAdmin.html';		
	}else if(email == 'cliente@correo.com' && pass == "12345"){
		console.log('Usted es el cliente');		
	}else if(email == 'empleado@correo.com' && pass == "12345"){
		console.log('Usted es el empleado');
	}else{
		alert('Es incorrecto');		
	}	
}








