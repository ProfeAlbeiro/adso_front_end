<?php 

	require_once 'model/User.php';

	class Usuarios {

		private $model;
		
		public function __construct(){
			$this->model = new User();
		}

		// CREATE: Crear Usuario
		public function crear(){
			# Recibir datos por GET
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				require_once 'view/roles/1_admin/header.php';
				require_once 'view/modules/1_users/crear_usuario.view.php';
				require_once 'view/roles/1_admin/footer.php';
			}
			# Recibir los datos por POST
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				# Se crea una instacia (objeto) de la Clase Usuario
				$usuario = new User();
				$usuario->setIdRol($_POST['rol']);
				$usuario->setIdUsuario(null);
				$usuario->setDocIdUsuario($_POST['documento']);
				$usuario->setNombresUsuario($_POST['nombres']);
				$usuario->setApellidosUsuario($_POST['apellidos']);
				$usuario->setCorreoUsuario($_POST['correo']);
				$usuario->setPassUsuario(sha1($_POST['pass']));
				$usuario->setEstadoUsuario($_POST['estado']);
				# Enviar el Usuario creado al Modelo y a su vez a la BBDD
				$this->model->registrar($usuario);
				header('Location: ?c=Usuarios&a=consultar');				
			}
		}

		// READ: Consultar los Usuarios
		public function consultar(){
			$users = $this->model->listar();			
			require_once 'view/roles/1_admin/header.php';
			require_once 'view/modules/1_users/consultar_usuarios.view.php';
			require_once 'view/roles/1_admin/footer.php';
		}

		// UDPATE: Actualizar Usuario
		public function actualizar(){
			# Envía el Id para que devuelva el usuario de la BBDD
			if (($_SERVER['REQUEST_METHOD']) == 'GET') {
				// echo 'Estoy aquí';
				$user = $this->model->getById($_GET['id']);				
				$perfil = ['admin', 'usuario', 'cliente', 'vendedor'];
				$estado = ['inactivo', 'activo'];
				require_once 'view/roles/1_admin/header.php'; 
				require_once 'view/modules/1_users/actualizar_usuario.view.php';
				require_once 'view/roles/1_admin/footer.php';
			}
			// # Envía los cambios a través de un objeto que actualiza la BBDD
			// if (($_SERVER['REQUEST_METHOD']) == 'POST') {
			// 	$usuario = new User();
			// 	$usuario->setIdRol($_POST['rol']);
			// 	$usuario->setIdUsuario($_POST['id']);
			// 	$usuario->setDocIdUsuario($_POST['documento']);
			// 	$usuario->setNombresUsuario($_POST['nombres']);
			// 	$usuario->setApellidosUsuario($_POST['apellidos']);
			// 	$usuario->setCorreoUsuario($_POST['correo']);
			// 	$usuario->setPassUsuario(sha1($_POST['pass']));
			// 	$usuario->setEstadoUsuario($_POST['estado']);
			// 	$this->model->actualizar($usuario);
			// 	header('Location: ?c=Users&a=consultar');
			// }
		}

		// DELETE: Eliminar Usuario
		public function eliminar(){

		}
	}

?>