
function apagar(){
	var caja = document.getElementById("caja");
	// caja.style.visibility = "hidden";
	caja.style.display = "none";
}
function prender(){
	var caja = document.getElementById("caja");
	// caja.style.visibility = "visible";
	caja.style.display = "block";
}

function apagarPrender(){
	//Obtener el objeto DOM del caja
	var caja = document.getElementById("caja");
	var boton = document.getElementById("boton");
	var checkboxPrender = document.getElementById("checkboxPrender");

	if (caja.style.display == "block" || caja.style.display == ""){
		apagar();
		boton.value = "Prender";
		boton.style.backgroundColor = "#c2b8f2";
		checkboxPrender.checked = ""; 

	} else {
		prender();
		boton.value = "Apagar";
		checkboxPrender.checked = "cheked";
		boton.style.backgroundColor = "#f9609b"; 

	}
}



function cambiarcolor(){
	let color = document.getElementById("favcolor").value;
	document.getElementById("espacio").style.backgroundColor = color;
}
