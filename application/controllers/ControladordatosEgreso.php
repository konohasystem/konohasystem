<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControladordatosEgreso extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_Egreso');
    }

    public function index() {
        $this->load->view('menu');
        $this->load->view('VistaEgreso');
    }


    public function EgresarDatos() {
        $Fecha = $this->input->post('inputFecha');
        $Diagnostico = $this->input->post('inputDiagnostico');
        $Solucion = $this->input->post('inputSolucion');
        $Servicios = $this->input->post('inputServicios');
        $Costos = $this->input->post('inputCostos');
        $Total = $this->input->post('inputTotal');
        

        $this->Modelo_Egreso->mEgresar($Fecha, $Diagnostico, $Solucion, $Servicios, $Costos, $Total);
        redirect('ControladordatosEgreso/MostrarEgreso');
    }

    public function MostrarEgreso() {
        $data = array(
            'mostrarDatos' => $this->Modelo_Egreso->mMostrarEgreso(),
        );
        $this->load->view('menu');
        $this->load->view('VistaMostrarEgreso', $data);
    }

    public function VerPerfil() {
        $data = array(
            'mostrarDatos' => $this->Modelo_Egreso->mMostrarCliente(),
        );
        $this->load->view('menu');
        $this->load->view('Perfil', $data);
    }

    public function eliminarCliente() {
        $id = $this->uri->segment(3);
        $this->Modelo_Egreso->meliminarEgreso($id);
        redirect('ControladordatosEgreso/MostrarEgreso');
    }

    public function editarCliente() {
       
        $id = $this->uri->segment(3);
        $obtenerCliente = $this->Modelo_Egreso->meditarEgreso($id);

        $data = array(
            'Id_egreso' => $obtenerCliente,
            'idParaEditarCliente' => $id
        );
        $this->load->view('menu');
        $this->load->view('VistaeditarEgreso', $data);
    }

    public function editarCliente2() {
        $id = $this->uri->segment(3);
        $Fecha = $this->input->post('inputFecha');
        $Diagnostico = $this->input->post('inputDiagnostico');
        $Solucion = $this->input->post('inputSolucion');
        $Servicio = $this->input->post('inputServicios');
        $Costos = $this->input->post('inputCostos');
        $Total = $this->input->post('inputTotal');
        
        $this->Modelo_Egreso->editarEgreso($id, $Fecha, $Diagnostico, $Solucion, $Servicio, $Costos, $Total);
        redirect('ControladordatosEgreso/MostrarEgreso');
    }

}