<?php

	require_once 'model/User.php';

	class Login {

		private $model;

		public function __construct(){
			$this->model = new User();
		}
		// Comprobar si el usuario está registrado en el Sistema
		public function index(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$usuario = new User();
				$usuario->setCorreoUsuario($_POST['usuario']);
				$usuario->setPassUsuario(sha1($_POST['pass']));
				$usuario = $this->model->iniciarSesion($usuario);				
				if ($usuario) {
					if ($usuario->getIdRol() == 1 && $usuario->getEstadoUsuario() == 1) {
						header('Location: ?c=DashboardAdmin');
					} else {
						header('Location: ?');
					}
				} else {
					header('Location: ?');
				}
			}
		}
	}
?>