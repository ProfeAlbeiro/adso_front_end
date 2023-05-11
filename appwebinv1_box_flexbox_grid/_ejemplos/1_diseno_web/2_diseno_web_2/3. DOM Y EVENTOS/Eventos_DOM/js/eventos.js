function cambiarFondo(){
	var x = document.getElementById("caja");
	x.style.backgroundColor = "skyblue";
}
function cambiarColorId(){
	var x = document.getElementById("texto");
	x.style.color = "#fff";
}
function cambiarColorTag(){
	var y = document.getElementsByTagName("p");
	for(var i=0; i<y.length; i++){
		y[i].style.color = "#444";
	}
}
function cambiarColorName(){
	var z = document.getElementsByName("prueba");
	for(var j=0; j<z.length; j++){
		z[j].style.backgroundColor = "#f0f";
		z[j].style.color = "#000";
	}
}


