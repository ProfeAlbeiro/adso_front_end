function alertar(mensaje) {
	var estado = document.getElementById("estado");
	estado.style.display = "block";
	estado.innerHTML = mensaje + "<br />" + estado.innerHTML;	
}

// function llenarCaja() {
// 	var caja = document.getElementById("caja");	
// 	caja.innerHTML = "Esto es texto desde JavaScript <button>Apareci</button>";
// }
