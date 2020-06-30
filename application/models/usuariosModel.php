<?php 
	if (! defined('BASEPATH')){
  exit('No direct script acces allowed');

}
class usuariosModel extends CI_MODEL{
	/*public function verifica(){
		return $this->db->Select('*')
						->from('usuarios')
						->get('')
						->result();
	}
	*/
	public function verifica($usuario,$pass){
				 $this->db->where('Usuario',$usuario);
				 $this->db->where('contrasena',$pass);
				 $query = $this->db->get('usuarios')->row_array();
				 return $query;
						 
	}
	public function verificaID($usuario,$pass){
				return $this->db->Select('idUsuario,Usuario,Contrasena')
						->from('usuarios')
						->where('Usuario',$usuario)
						->where('contrasena',$pass)
						->get('')
				 		->result();
						 
	}
	public function nuevoUsuario($Nombre,$Apellidos,$Usuario,$Contrasena,$Email){
		return $this->db->set('Nombre',$Nombre)
						->set('Apellidos',$Apellidos)
						->set('Usuario',$Usuario)
						->set('Contrasena',$Contrasena)
						->set('Email',$Email)
						->insert('usuarios');

	}
	public function verUsuarios(){
		return $this->db->Select('idUser')
				 ->from('usuarios')
				 ->limit('1')
				 ->get('')
				 ->result();
	}

	public function peliculas(){
		return $this->db->Select('NomPelicula,Director,Costo,Fecha,Imagen')
						->from('peliculas')
						->get('')
				 		->result();

	}
	public function datosPelicula($peli){
		return $this->db->Select('*')
						->from('peliculas')
						->where('NomPelicula',$peli)
						->get('')
				 		->result();
	}
	public function RegistroCompra($id,$idUs,$FS,$FR){
		return $this->db->set('idPelicula',$id)
						->set('idUsuario',$idUs)
						->set('FechaEntrega',$FS)
						->set('FechaRegreso',$FR)
						->insert('rentarpelicula');
	}
	public function MostrarHistorial($idUs){
		return $this->db->Select('u.usuario, p.NomPelicula, r.FechaEntrega, r.FechaRegreso')
						->from('usuarios as u')
						->join('rentarpelicula as r','r.idUsuario = u.idUsuario')
						->join('peliculas as p','p.idPelicula = r.idPelicula')
						->where('r.idUsuario',$idUs)
						->get('')
				 		->result();

	}

}
 ?>