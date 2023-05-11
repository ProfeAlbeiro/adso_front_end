<?php
class LoginU
{
	private $pdo;
    
    public $idUsuario;
    public $nombreUsuario;
    public $passwordUsuario;
    

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ValidarUsuario($nombreUsuario,$passwordUsuario)
	{
		try 
		{

			$sql="SELECT * FROM usuario WHERE nombreUsuario = '$nombreUsuario' and passwordUsuario= '$passwordUsuario'";
			
			$stm = $this->pdo
			          ->prepare($sql);
			$res=$stm->execute();
			//echo $sql;

			return $stm->FETCH(PDO::FETCH_OBJ);
			
			          
			
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	

	
}