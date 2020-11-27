<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_Egreso extends CI_Model {
    
        public function __construct()
	{
		parent::__construct();
	}
	 
        
        public function mEgresar($Fecha, $Diagnostico, $Solucion, $Servicio, $Costos, $Total) {
                $data= array(
                    'Fecha' => $Fecha,
                    'Diagnostico' => $Diagnostico,
                    'Solucion' => $Solucion,
                    'Servicio' => $Servicio,
                    'Costos' => $Costos,
                    'Total' => $Total
                );
                $this->db->insert('egreso', $data);
        }
        
        public function mMostrarEgreso() {
                $query =  $this->db->get('egreso');


                return $query;
        }




        public function meliminarEgreso($id){
                $this->db->where('Id_egreso', $id);
                $this->db->delete('egreso');
         }
         
        public function meditarEgreso($id) {
                $this->db->where('Id_egreso', $id);
                $query = $this->db->get('egreso');
        
                return $query;
    }
    
        public function editarEgreso($id, $Fecha, $Diagnostico, $Solucion, $Servicio, $Costos, $Total) {
                $data = array(
                    'Fecha' => $Fecha,
                    'Diagnostico' => $Diagnostico,
                    'Solucion' => $Solucion,
                    'Servicio' => $Servicio,
                    'Costos' => $Costos,
                    'Total' => $Total,
        );
        
               $this->db->where('Id_egreso', $id);
               $this->db->update('egreso', $data);
    }
}





