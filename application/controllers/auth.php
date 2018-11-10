<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model("model_usuario");
  }
	public function index()
	{
    if ($this->session->userdata("login")) {
      redirect(base_url()."dashboard");
    }else {
      $this->load->view('header');
		  $this->load->view('vista_inicio');
		  $this->load->view('footer');
    }
  }
  public function login(){
    $username = $this->input->post("username");
    $password = $this->input->post("password");
    $res = $this->model_usuario->login($username, $password);
    
    if (!$res) {  
      $this->session->flashdata("error", "El usuario y/o son incorretos");  
      redirect(base_url());
    }else {     
      $data = array (
        'ID_USUARIO' => $res->ID_USUARIO,
        'NOMBRE_USUARIO' => $res->NOMBRE_USUARIO,
        'TIPO' => $res->TIPO,
        'login' => true,
        'nombre_usuario' => $res->NOMBRE_COMPLETO
      );
      $this->session->set_userdata($data);
      redirect(base_url()."dashboard");
    }  
  }
  public function logout(){
    $this->session->sess_destroy();
    redirect(base_url());
  }
}