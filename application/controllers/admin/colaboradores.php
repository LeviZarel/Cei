<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model("model_colaboradores");
  }

	public function index(){
    $data = array(
      'facilitadores' => $this->model_colaboradores->getColaboradores(),
    );
		$this->load->view('header');
		$this->load->view('admin/colaboradores/c_vista_listar', $data);
		$this->load->view('footer');
  }
  public function add(){
		$this->load->view('header');
		$this->load->view('admin/colaboradores/c_vista_add');
		$this->load->view('footer');
  }
  public function store(){
    $nombreApellido = $this->input->post("nombreApellido");
    $correo = $this->input->post("correo");
    $departamento = $this->input->post("departamento");
    $ci = $this->input->post("ci");
    $telf = $this->input->post("telf");
    $nombre_usuario = $this->input->post("nombre_usuario");
    $clave = $this->input->post("clave");
    /* echo $nombreApellido." ".$correo." ".$departamento." ".$ci." ".$telf." ".$nombre_usuario." ".$clave; */
    
    $data_usuario = array(
      'NOMBRE_USUARIO' => $nombre_usuario,
      'CLAVE' => sha1($clave),
      'TIPO' => "1"
    );
    if ($this->model_colaboradores->save($data_usuario)){
      redirect(base_url());
    }else {
      $this->session->set_flashdata("error", "No se pudo registrar!");
      redirect(base_url()."colaboradores/add");
    }

    $data_facilitador = array(
      'nombre_apellido' => $nombreApellido,
      'correo' => $correo,
      'departamento' => $departamento,
      'ci' => $ci,
      'telf' => $telf,
      'habilitado' => "1"
    );
  }
}