<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: app/logica/index_admin.php');
} else {
	require_once 'app/logica/index_empresa.php';
	// header('Location: app/logica/index_empresa.php');	
}

?>
