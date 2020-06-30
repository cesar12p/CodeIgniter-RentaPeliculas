<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class MenuController extends CI_Controller{
		public function __construct(){
			parent::__construct();
		//Cargamos el modelo a usar
		$this ->load-> model('usuariosModel');
		}
		public function inicio(){
			$this->load->view('menuView');
}
			
}
 ?>