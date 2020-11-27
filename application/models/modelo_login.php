<?php
class Modelo_login extends CI_Model
{	
	public function __construct()
	{
		parent::__construct();
		//$this->load->database();
	}

	public function login($rut, $clave)
	{		
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('rut',$rut);
		$this->db->where('clave', $clave);
		$datos = $this->db->get();
		return $datos->result();
	}

	public function user_name($rut)
	{
		$this->db->select('rut, Nombre_Completo');
		$this->db->from('usuario');
		$this->db->where('rut',$rut);
		$datos = $this->db->get();
		return $datos->result();
	}
        
        public function mMostrarr() {
            $query =  $this->db->get('usuario');

            return $query;
    
                
            
        }
	
}
