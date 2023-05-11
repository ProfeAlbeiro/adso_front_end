// Recupera los tamaños de los módulos
// var mod = [];
// var tamMod = [];
// for (var i = 0; i < 4; i++) {
// 	mod[i] = document.getElementById('mod-cuerpo-' + i);
// 	tamMod[i] = mod[i].clientHeight;
// 	mod[i].style.cssText = 'height: ' + tamMod[i] + 'px';
// 	document.getElementById('mod-cuerpo-' + i).classList.toggle('activar-mod-cuerpo-' + i);
// }

// Captura: La cantidad de 'ul', la altura de cada uno y los vuelve a '0'
el = document.getElementById("modulos");
els = el.getElementsByTagName('ul');
acord = [];
altoAcor = [];
for (var i = 1; i < els.length + 1; i++) {
	acord[i] = document.getElementById("acordeon-ul-" + i);
	altoAcor[i] = acord[i].clientHeight;
	acord[i].style.cssText = "height: 0px";	
}

// Botón de Menú
document.getElementById("btn-menu-lateral").addEventListener("click", function() {
	document.getElementById("panel-lateral").classList.toggle('activar-panel');
});

// Opciones del Panel Lateral
document.getElementById("panel-lateral").addEventListener("click", opcPanel);
function opcPanel(e) {	
	// Captura: Identificador de los elementos del panel
	ident = e.target.id;
	console.log(ident);	

	// Captura: Número y nombre del acordeon, recupera alto del acordeon cargado al inicio
	numAcor = ident.charAt(9);
	nomAcor = "acordeon-" + numAcor;
	if (ident == nomAcor) {
		if (altoAcor[numAcor] > 0) {
			acord[numAcor].style.cssText = 'height: ' + altoAcor[numAcor] + 'px';
			altoAcor[numAcor] = 0;
		} else {		
			acord[numAcor].style.cssText = 'height: ' + altoAcor[numAcor] + 'px';
			altoAcor[numAcor] = acord[numAcor].clientHeight;		
		}		
	}
	// console.log(altoAcor);
	// numMod = ident.charAt(4);
	// for (var i = 0; i < 4; i++) {
	// 	if (ident == "mod-" + i) {			
	// 		document.getElementById('mod-cuerpo-' + i).classList.toggle('activar-mod-cuerpo-' + i);
	// 	}
	// }
	// ancho = screen.width;	
	// numAcor = ident.charAt(13);
	// btnAcor = 'btn-acordeon-' + numAcor;
	// btnMod = 'mod-' + numMod;	
	// console.log(btnMod);
	// console.log(ident);
	// Esconde el contenido de los módulos en la tablet

	// Esconde el Panel Lateral al seleccionar una opción
	// if (ident!="" && ident!= btnAcor && ident!= btnMod && ancho<=992) {		
	// 	document.getElementById('panel-lateral').classList.toggle('activar-panel');
	// }
	// Muestra el acordeon
	// else if (numAcor!=0 && ident == btnAcor) {
	// 	nomAcor = 'acordeon-' + numAcor;
	// 	ulAcor = 'acordeon-ul-' + numAcor;
	// 	acord = document.getElementById(nomAcor);
	// 	altoAcor = acord.clientHeight;		
	// 	if (altoAcor == 0) {
	// 		el = document.getElementById(ulAcor);
	// 		els = el.getElementsByTagName('li');
	// 		vec = []
	// 		for(i=0;i<els.length;i++){
	// 			if(els[i].parentNode==el){
	// 				vec.push(els[i]);
	// 			}
	// 		}			
	// 		altoAcor = 39 * vec.length + 1;			
	// 		acord.style.cssText = 'height: ' + altoAcor + 'px';
	// 	}else{			
	// 		document.getElementById(nomAcor).classList.toggle('activar-acordeon');
	// 		acord.style.cssText = 'height: 0px';
	// 	}
	// }		
}