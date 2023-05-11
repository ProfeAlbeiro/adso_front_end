<?php 

class Login extends Controller{
	
	public function __construct(){
		// echo "Controlador páginas cargadas";
	}

	public function index(){
		$datos = [
			'titulo' => 'Empresa - Página Principal'
		];
		$this->vista('/business/login_view', $datos);	
	}
	
}

?>