function validar(){
	let user = document.getElementById('user').value;
	let pass = document.getElementById('pass').value;

	if (user == 'admin' && pass == "12345") {
		window.location = 'app/index-admin.html';
	}else if(user == 'cliente' && pass == "12345"){
		window.location = 'app/index-cliente.html';	
	}else{
		window.location = 'paginas/mensaje.html';
	}	
}

function validarPaginas(){
	let user = document.getElementById('user').value;
	let pass = document.getElementById('pass').value;	

	if (user == 'admin' && pass == "12345") {
		window.location = '../app/index-admin.html';		
	}else if(user == 'cliente' && pass == "12345"){
		window.location = '../app/index-cliente.html';			
	}else{
		window.location = '../paginas/mensaje.html';
	}	
}

function validarNavegacion(){
	let user = document.getElementById('user').value;
	let pass = document.getElementById('pass').value;	

	if (user == 'admin' && pass == "12345") {
		window.location = '../../app/index-admin.html';		
	}else if(user == 'cliente' && pass == "12345"){
		window.location = '../../app/index-cliente.html';			
	}else{
		window.location = '../mensaje.html';
	}	
}