<?php
	class LandingPage {
		public function __construct(){

		}
		public function index(){
			require_once 'view/roles/0_business/header.php';
			require_once 'view/business/landing.main.view.php';
			require_once 'view/roles/0_business/footer.php';
		}
	}
?>