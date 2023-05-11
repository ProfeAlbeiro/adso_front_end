<?php 

	class SaleController{
		
		function __construct(){}

		function create(){
			require_once 'Views/Modules/Sales/create.php';
		}

		function read(){
			require_once 'Views/Modules/Sales/read.php';
		}

		function update(){
			require_once 'Views/Modules/Sales/update.php';
		}

		function delete(){
		}

	}

?>