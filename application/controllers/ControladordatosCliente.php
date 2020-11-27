<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControladordatosCliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_cliente');
    }

    public function index() {
        $this->load->view('menu');
        $this->load->view('VistadatosCliente');
    }

    public function IngresarDatos() {
        $rut = $this->input->post('inputRut');
        $nombre = $this->input->post('inputNombre');
        $fecha = $this->input->post('inputFecha');
        $telefono = $this->input->post('inputTelefono');
        $Direccion = $this->input->post('inputDireccion');
        
        
        
        
        
        $Modelo = $this->input->post('inputModelo');
        $Marca = $this->input->post('inputMarca');
        $S_O = $this->input->post('inputSistema');
        $Componentes = $this->input->post('inputComponentes');
        $Accesorios = $this->input->post('inputAccesorios');
        $problema = $this->input->post('inputProblema');
        
        $this->Modelo_cliente->mIngresarCliente($rut, $nombre, $fecha, $telefono, $Direccion, $Marca, $Modelo, $S_O, $Accesorios, $Componentes, $problema);
        redirect('ControladordatosCliente/MostrarCliente');
    }

    public function MostrarCliente() {
        $data = array(
            'mostrarDatos' => $this->Modelo_cliente->mMostrarCliente(),

        );
        $this->load->view('menu');
        $this->load->view('VistamostrarCliente', $data);
    }
    

    public function eliminarCliente() {
        $id = $this->uri->segment(3);
        $this->Modelo_cliente->meliminarCliente($id);
        redirect('ControladordatosCliente/MostrarCliente');
    }

    public function editarCliente() {
       
        $id = $this->uri->segment(3);
        $obtenerunCliente = $this->Modelo_cliente->obtenerCliente($id);

        $data = array(
            'UnCliente' => $obtenerunCliente,
            'ideditarcliente' => $id
        );
        $this->load->view('menu');
        $this->load->view('VistaeditarCliente', $data);
    }

    public function editarCliente2() {
        $id = $this->uri->segment(3);
        $rut = $this->input->post('inputRut');
        $nombre = $this->input->post('inputNombre');
        $fecha = $this->input->post('inputFecha');
        $telefono = $this->input->post('inputTelefono');
        $Direccion = $this->input->post('inputDireccion');
        $Marca = $this->input->post('inputMarca');
        $Modelo = $this->input->post('inputModelo');
        $S_O = $this->input->post('inputSistema');
        $Accesorios = $this->input->post('inputAccesorios');
        $Componentes = $this->input->post('inputComponentes');
        $problema = $this->input->post('inputProblema');
        
        $this->Modelo_cliente->editarCliente($id, $rut, $nombre, $fecha, $telefono, $Direccion, $Marca, $Modelo, $S_O, $Accesorios, $Componentes, $problema);
        redirect('ControladordatosCliente/MostrarCliente');
    }

}
