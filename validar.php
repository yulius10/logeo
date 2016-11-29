<?php
	class validarSession{
		public function __construct(){
		}
		public function init(){
			@session_start();
		}
		public function nombreSession($varname, $value){	
			$_SESSION[$varname] = $value;
		}
		public function cerrarSession(){
			session_unset();
			session_destroy();
		}
	}
?>