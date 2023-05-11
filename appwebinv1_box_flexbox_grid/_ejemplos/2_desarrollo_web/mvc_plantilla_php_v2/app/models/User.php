<?php 

	class User{

		private $db;

		public function __construct(){
			$this->db = new Connection;
		}

		// Crear Usuario
		public function agregarUsuario($datos){
			$this->db->query('INSERT INTO usuarios 
				(nombre_usuario, email_usuario, telefono_usuario)
				VALUES
				(:nombre_usuario, :email_usuario, :telefono_usuario)');
			// Vincular los valores
			$this->db->bind(':nombre_usuario', $datos['nombre_usuario']);
			$this->db->bind(':email_usuario', $datos['email_usuario']);
			$this->db->bind(':telefono_usuario', $datos['telefono_usuario']);
			// Ejecutar
			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}

		// Consultar Usuarios
		public function obtenerUsuarios(){
			$this->db->query('SELECT * FROM usuarios');
			$resultados = $this->db->registros();
			return $resultados;
		}
		// Actualizar Usuario
		public function obtenerUsuario($num_registro){
			$this->db->query('SELECT * FROM usuarios WHERE id_usuario = :id_usuario');
			$this->db->bind(':id_usuario', $num_registro);
			$fila = $this->db->registro();
			return $fila;
		}
		public function actualizarUsuario($datos){
			$this->db->query('UPDATE usuarios SET  
				nombre_usuario = :nombre_usuario, 
				email_usuario = :email_usuario, 
				telefono_usuario = :telefono_usuario
				WHERE id_usuario = :id_usuario');
			// Vincular los valores
			$this->db->bind(':id_usuario', $datos['id_usuario']);
			$this->db->bind(':nombre_usuario', $datos['nombre_usuario']);
			$this->db->bind(':email_usuario', $datos['email_usuario']);
			$this->db->bind(':telefono_usuario', $datos['telefono_usuario']);
			// Ejecutar
			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}
		// Eliminar Usuario
		public function borrarUsuario($datos){
			$this->db->query('DELETE FROM usuarios WHERE id_usuario = :id_usuario');
			// Vincular los valores
			$this->db->bind(':id_usuario', $datos['id_usuario']);			
			// Ejecutar
			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}
	}
?>