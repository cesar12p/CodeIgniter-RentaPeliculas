<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class usuarioController extends CI_Controller{
		public function __construct(){
			parent::__construct();
		//Cargamos el modelo a usar
		$this ->load-> model('usuariosModel');
		}
		public function Ingresar(){
			if(isset($_POST['datosUsuario'])){
			echo "Esoty bien";
			$usuario=$_POST['Usuario'];
			$pass=sha1($_POST['Contrasena']);
			$data['Usuario']=$usuario;
			$data['Contrasena']=$pass;
			echo $usuario;
			echo $pass;
			$data3['peli'] = $this->usuariosModel->peliculas();
			$query = $this->usuariosModel->verifica($usuario,$pass);
			$data3['idu'] =$this->usuariosModel->verificaID($usuario,$pass);
		//	session_start();
		//	ob_start();
		//	$_SESSION['ho']=$peli[0]->NomPelicula;
			if($query){
				$this->load->view('usuarioView',$data3);
			}else{
					$this->load->view('LogginErrorView');
			}
	}else{

			session_start();
			$usuario=$_SESSION['ho1'];
			$pass=$_SESSION['ho2'];
			$data['Usuario']=$usuario;
			$data['Contrasena']=$pass;
			$data3['peli'] = $this->usuariosModel->peliculas();
			$query = $this->usuariosModel->verifica($usuario,$pass);
			$data3['idu'] =$this->usuariosModel->verificaID($usuario,$pass);
		//	session_start();
		//	ob_start();
		//	$_SESSION['ho']=$peli[0]->NomPelicula;
			if($query){
				$this->load->view('usuarioView',$data3);
			}else{
					$this->load->view('LogginErrorView');
			}
	}
}
public function Registrarmev(){
	$this->load->view('registrarUserView');
}
public function RegistrarUsuario(){
	if(isset($_POST['datosUsuario2'])){
			$Nombre=$_POST['Nombre'];
			$Apellidos=$_POST['Apellidos'];
			$Usuario=$_POST['Usuario'];
			$Contrasena=sha1($_POST['Contrasena']);
			$Email=$_POST['Email'];
			$data['Usuario']=$Usuario;
			$data['ing'] = $this->usuariosModel->nuevoUsuario($Nombre,$Apellidos,$Usuario,$Contrasena,$Email);
			$this->load->view('menuView');		
	}	
}
public function Cobrar(){
	$id=$_POST['id'];
	$FS=$_POST['FS'];
	$FR=$_POST['FR'];
	session_start();
	ob_start();
	$idUs=$_SESSION['ho'];
	echo $idUs;
	$datga['n']=$this->usuariosModel->RegistroCompra($id,$idUs,$FS,$FR);
	$this->load->view('compra');
}
public function MostrarMenu(){
	$this->load->view('menuView');
}
public function Rentar1(){
	$peli='CAPITANA MARVEL';

	
	$data3['n1'] = $this->usuariosModel->datosPelicula($peli);
	$this->load->view('RentarView',$data3);
}
public function Rentar2(){
	$peli='Como Novio de Pueblo';
	$data4['n1'] = $this->usuariosModel->datosPelicula($peli);
	$this->load->view('RentarView',$data4);
}
public function Rentar3(){
	$peli='A dos metros de ti';
	$data5['n1'] = $this->usuariosModel->datosPelicula($peli);
	$this->load->view('RentarView',$data5);
}
public function Rentar4(){
	$peli='DUMBO';
	$data6['n1'] = $this->usuariosModel->datosPelicula($peli);
	$this->load->view('RentarView',$data6);
}
public function Rentar5(){
	$peli='El Bosque Maldito';
	$data7['n1'] = $this->usuariosModel->datosPelicula($peli);
	$this->load->view('RentarView',$data7);
}
public function Rentar6(){
	$peli='En las buenas y en las malas';
	$data8['n1'] = $this->usuariosModel->datosPelicula($peli);
	$this->load->view('RentarView',$data8);
}
public function Rentar7(){
	$peli='Pajaritos a Volar';
	$data9['n1'] = $this->usuariosModel->datosPelicula($peli);
	$this->load->view('RentarView',$data9);
}
public function verHistorial(){
	session_start();
	$idUs=$_SESSION['ho'];
	$historial['datos']=$this->usuariosModel->MostrarHistorial($idUs);
	$this->load->view('historial',$historial);
}


}
 ?>