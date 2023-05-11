<?php 
	
	function call($controller, $action){		
		require_once 'Controllers/' . $controller . '_controller.php';
		switch ($controller) {
			case 'user':
				require_once 'Models/model_dto/UserDto.php';
				require_once 'Models/model_dao/UserDao.php';
				$controller = new UserController();
				break;
			case 'sale':
				$controller = new SaleController();
				break;
		}
		$controller->$action();
	}

	$controllers = array(
		'user' => ['main', 'create', 'read', 'update'],
		'sale' => ['create', 'read', 'update']
	);

	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('user', 'error');
		}		
	} else {
		call('user', 'error');
	}

?>