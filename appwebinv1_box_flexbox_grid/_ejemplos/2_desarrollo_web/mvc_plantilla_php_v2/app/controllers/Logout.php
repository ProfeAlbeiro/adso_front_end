<?php 

class Logout extends Controller{
	
	public function __construct(){
		// echo "Controlador páginas cargadas";
	}

	public function index(){
		$datos = [
			'titulo' => 'Empresa - Página Principal'
		];
		$this->vista('/business/index_login_view', $datos);	
	}
	
}

?>