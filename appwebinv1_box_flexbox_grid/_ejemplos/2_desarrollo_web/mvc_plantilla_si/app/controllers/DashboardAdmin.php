<?php 

class DashboardAdmin extends Controller{	

	public function __construct(){
		// echo "Controlador páginas cargadas";
	}

	public function index(){		
		$datos = [
			'titulo' => 'Administrador - Vista Principal',
			'modulo' => '0_mains',
			'vista' => 'admin_main_view.php',
			'parametro' => null
		];				
		$this->vista('/modules/dashboard_admin_view', $datos);
	}

}
?>