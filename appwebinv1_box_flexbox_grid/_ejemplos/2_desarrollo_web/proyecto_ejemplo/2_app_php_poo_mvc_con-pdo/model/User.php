<?php 

	class User {

		private $idRol = 2;
		private $idUsuario;
		private $docIdUsuario = 0;
	    private $nombresUsuario;
    	private $apellidosUsuario;
    	private $correoUsuario;
    	private $passUsuario;
    	private $estadoUsuario = false;

    	private $pdo;

    	public function __construct(){
			try {
				$this->pdo = DataBase::conexion();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		// idRol
		public function getIdRol(){
			return $this->idRol;
		}
		public function setIdRol($idRol){
			$this->idRol = $idRol;
		}
		// idUsuario
		public function getIdUsuario(){
			return $this->idUsuario;
		}
		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}
		// docIdUsuario
		public function getDocIdUsuario(){
			return $this->docIdUsuario;
		}
		public function setDocIdUsuario($docIdUsuario){
			$this->docIdUsuario = $docIdUsuario;
		}
		// nombreUsuario
		public function getNombresUsuario(){
			return $this->nombresUsuario;
		}
		public function setNombresUsuario($nombresUsuario){
			$this->nombresUsuario = $nombresUsuario;
		}
		// apellidosUsuario
		public function getApellidosUsuario(){
			return $this->apellidosUsuario;
		}
		public function setApellidosUsuario($apellidosUsuario){
			$this->apellidosUsuario = $apellidosUsuario;
		}
		// correoUsuario
		public function getCorreoUsuario(){
			return $this->correoUsuario;
		}
		public function setCorreoUsuario($correoUsuario){
			$this->correoUsuario = $correoUsuario;
		}
		// passUsuario
		public function getPassUsuario(){
			return $this->passUsuario;
		}
		public function setPassUsuario($passUsuario){
			$this->passUsuario = $passUsuario;
		}
		// estadoUsuario
		public function getEstadoUsuario(){
			return $this->estadoUsuario;
		}
		public function setEstadoUsuario($estadoUsuario){
			$this->estadoUsuario = boolval($estadoUsuario);
		}

	/************************************************************/

		// Iniciar Sesión
		public function iniciarSesion($usuario){
			try {
				# Consulta
				$sql = 'SELECT * FROM usuarios WHERE
						usuario_correo = :usuario_correo AND
						usuario_pass = :usuario_pass';

				# Prepara la BBDD
				$dbh = $this->pdo->prepare($sql);

				# Vincula datos
				$dbh->bindValue('usuario_correo', $usuario->getCorreoUsuario());
				$dbh->bindValue('usuario_pass', $usuario->getPassUsuario());

				# Ejecuta la Consulta
				$dbh->execute();

				# Encontrar en la BBDD
				$userDb = $dbh->fetch();				

				# Se envía el objeto o se retorna falso (No se encontró)
				if ($userDb) {
					$user = new User();
					$user->setIdUsuario($userDb['id_usuario']);
					$user->setDocIdUsuario($userDb['usuario_doc_identidad']);
					$user->setCorreoUsuario($userDb['usuario_correo']);
					$user->setNombresUsuario($userDb['usuario_nombres']);
					$user->setApellidosUsuario($userDb['usuario_apellidos']);
					$user->setPassUsuario($userDb['usuario_pass']);
					$user->setIdRol($userDb['id_rol']);
					$user->setEstadoUsuario($userDb['usuario_estado']);
					return $user;
				} else {
					return false;
				}
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		// Registrar el Usuario en la Base de Datos
		public function registrar($usuario){
			try {
				# Consulta
				$sql = 'INSERT INTO usuarios VALUES (
							:id_rol,
							null,
							:usuario_doc_identidad,
							:usuario_nombres,
							:usuario_apellidos,
							:usuario_correo,
							:usuario_pass,
							:usuario_estado
						)';

				# Prepara la BBDD
				$dbh = $this->pdo->prepare($sql);

				# Vincula datos
				$dbh->bindValue('id_rol', $usuario->getIdRol());
				$dbh->bindValue('usuario_doc_identidad', $usuario->getDocIdUsuario());
				$dbh->bindValue('usuario_nombres', $usuario->getNombresUsuario());
				$dbh->bindValue('usuario_apellidos', $usuario->getApellidosUsuario());
				$dbh->bindValue('usuario_correo', $usuario->getCorreoUsuario());
				$dbh->bindValue('usuario_pass', $usuario->getPassUsuario());
				$dbh->bindValue('usuario_estado', $usuario->getEstadoUsuario());

				# Ejecuta la Consulta
				$stmt = $dbh->execute();
				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		// Consultar todos los datos de la Tabla Usuarios
		public function listar(){			
			try {
				# Crear Arreglo
				$userList = [];

				# Consulta
				$sql = 'SELECT * FROM usuarios';
				$dbh = $this->pdo->query($sql);

				# Recorre la BBDD
				foreach ($dbh->fetchAll() as $user) {
					$usuario = new User();
					$usuario->setIdUsuario($user['id_usuario']);
					$usuario->setDocIdUsuario($user['usuario_doc_identidad']);
					$usuario->setCorreoUsuario($user['usuario_correo']);
					$usuario->setNombresUsuario($user['usuario_nombres']);
					$usuario->setApellidosUsuario($user['usuario_apellidos']);
					$usuario->setPassUsuario($user['usuario_pass']);
					$usuario->setIdRol($user['id_rol']);
					$usuario->setEstadoUsuario($user['usuario_estado']);
					# Arreglo de Objetos
					$userList[] = $usuario;
				}

				# Retorna el Arreglo de Objetos 
				return $userList;

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		// Actualizar I: Obtener el usuario
		public function getById($id){
			try {
				# Consulta
				$sql = 'SELECT * FROM usuarios WHERE id_usuario=:id_usuario';
				# Prepara la BBDD
				$dbh = $this->pdo->prepare($sql);
				# Vincula Datos
				$dbh->bindValue('id_usuario', $id);
				# Ejecuta la Consulta
				$dbh->execute();
				# Encontrar en la BBDD
				$userDb = $dbh->fetch();
				# Crear Objeto
				$usuario = new User();
					$usuario->setIdUsuario($userDb['id_usuario']);
					$usuario->setDocIdUsuario($userDb['usuario_doc_identidad']);
					$usuario->setCorreoUsuario($userDb['usuario_correo']);
					$usuario->setNombresUsuario($userDb['usuario_nombres']);
					$usuario->setApellidosUsuario($userDb['usuario_apellidos']);
					$usuario->setPassUsuario($userDb['usuario_pass']);
					$usuario->setIdRol($userDb['id_rol']);
					$usuario->setEstadoUsuario($userDb['usuario_estado']);
				return $usuario;
			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}

		// Actualizar II: Actualizr el usuario
	}

?>