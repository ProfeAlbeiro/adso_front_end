
let password = "ED"; // Algebra Baldor --> Ecuaciones e Inecuaciones (>=, <=)
let intentos = 0;
let pass;

do{
	pass = prompt("Introduzca la contraseña");
	intentos += 1;
} while (pass != password && intentos < 3); // Algebra de Bool --> Lógica Matemática --> proposiciones (Tablas de Verdad) 
if (pass != password && intentos == 3) {
	console.log (`Cuenta bloqueada, superó más de: ${intentos} intentos`);	
} else {
	console.log (`Bienvenido, Intentos: ${intentos}`);	
}

// Practicar "Solo se aprende a programa,
//            Programando"

// Paradigma de Programación Estructurada - PPE
	// Variables y constantes
	// Tipos de Datos
	// Operadores: Aritméticos, Comparación, Lógicos
	// Estructuras 
		// Secuencial, 
		// Condicional
		// Repetición
	// Estructuras de Datos (Arreglos)
	// Funciones
		// Sin parámetros, sin retorno valor
		// Con parámetros, sin retorno valor
		// Sin parámetros, con retorno valor
		// Con parámetros, con retorno valor

// 1  Y  1  =  Verdadero
// 1  Y  0  =  Falso
// 0  Y  1  =  Falso
// 0  Y  0  =  Falso

// 1  O  1  =  (Verdadero)
// 1  O  0  =  Verdadero
// 0  O  1  =  Verdadero
// 0  O  0  =  Falso

// !1  = Falso
// !0  = Verdadero 