<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorLogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        /* if($this->session->userdata('id_usuario'))
          {
          redirect('ControladorLogin');
          } */

        $this->load->model('Modelo_login');
    }

    public function index() {
        $this->load->view('VistaLogin');
    }

    public function login() {

        $login = $this->Modelo_login->login($this->input->post('usuario'), $this->input->post('pass'));
        $usuario = $this->Modelo_login->user_name($this->input->post('usuario'));

        if ($login != null) {
            $data = array(
                'rut' => $usuario[0]->rut,
                'login' => $usuario[0]->nombre . " " . $usuario[0]->apellido
            );

        $this->session->set_userdata($data);

            echo '1';
        } else {
            echo '0';
        }
    }

    public function off_line() {
        $this->session->unset_userdata('rut');
        redirect('ControladorLogin');
    }
    
    
    public function VerPerfil() {
        
        
        $data = array(
            'usuario' => $this->Modelo_login->mMostrarr(),
            
        
        );
        $this->load->view('menu');
        $this->load->view('Perfil', $data);
    }

}
