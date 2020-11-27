<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_cliente extends CI_Model {
    
        public function __construct()
	{
		parent::__construct();
	}
	

	public function mIngresarCliente ($rut, $nombre, $fecha, $telefono, $Direccion, $Marca, $Modelo, $S_O, $Accesorios, $Componentes, $problema){
		$data= array(
                    'rut' => $rut,
                    'Nombre_C' => $nombre,
                    'Fecha' => $fecha,
                    'Telefono' => $telefono,
                    'Direccion' => $Direccion,
                    'Marca' => $Marca,
                    'Modelo' => $Modelo,
                    'S_O' => $S_O,
                    'Accesorios' => $Accesorios,
                    'Componentes' => $Componentes,
                    'Problema' => $problema,
                    );
                $this->db->insert('ingresoo', $data);
                
	}
        
        
        public function mMostrarCliente() {
                $query =  $this->db->get('ingresoo');
                
                
                return $query;
                
        }


        public function meliminarCliente($id){
                $this->db->where('Id_ingreso', $id);
                $this->db->delete('ingresoo');
         }
         
        public function obtenerCliente($id) {
                $this->db->where('Id_ingreso', $id);
                $query = $this->db->get('ingresoo');
        
                return $query;
    }
    
        public function editarCliente($id, $rut, $nombre, $fecha, $telefono, $Direccion, $Marca, $Modelo, $S_O, $Accesorios, $Componentes, $problema) {
                $data = array(
                    'rut' => $rut,
                    'Nombre_C' => $nombre,
                    'Fecha' => $fecha,
                    'Telefono' => $telefono,
                    'Direccion' => $Direccion,
                    'Marca' => $Marca,
                    'Modelo' => $Modelo,
                    'S_O' => $S_O,
                    'Accesorios' => $Accesorios,
                    'Componentes' => $Componentes,
                    'Problema' => $problema,
        );
        
               $this->db->where('Id_ingreso',$id);
               $this->db->update('ingresoo',$data);
    }
}


