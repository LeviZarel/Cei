<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model("model_colaboradores");
  }

	public function index(){
    $data = array(
      'usuarios' => $this->model_colaboradores->getColaboradores(),
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
    $nombre_completo = $this->input->post("nombre_completo");
    $correo = $this->input->post("correo");
    $departamento = $this->input->post("departamento");
    $ci = $this->input->post("ci");
    $telf = $this->input->post("telf");
    $nombre_usuario = $this->input->post("nombre_usuario");
    $clave = $this->input->post("clave");

    /* validando */
    $this->form_validation->set_rules("ci", "ci", "required|is_unique[usuario.CI]");
    $this->form_validation->set_rules("nombre_usuario", "nombre_usuario", "required");
    $this->form_validation->set_rules("clave", "contraseña", "required");
    
    if ($this->form_validation->run()){
      $data_usuario = array(
        'id_tipo_usuario' => "2",
        'nombre_completo' => $nombre_completo,
        'correo' => $correo,
        'departamento' => $departamento,
        'ci' => $ci,
        'telf' => $telf,
        'habilitado' => "1",
        'NOMBRE_USUARIO' => $nombre_usuario,
        'CLAVE' => sha1($clave),
        'CLAVE_TEMPORAL' => sha1($clave)
      );
      if ($this->model_colaboradores->save($data_usuario)){
        redirect(base_url()."admin/colaboradores");
      }else {
        $this->session->set_flashdata("error", "No se pudo registrar!");
        redirect(base_url()."admin/colaboradores/add");
      }
    }else {
      $this->add();
    }
  }

  public function edit($id){
    $data = array(
      'usuario' => $this->model_colaboradores->get($id)
    );
    $this->load->view('header');
		$this->load->view('admin/colaboradores/c_vista_edit', $data);
		$this->load->view('footer');
  }
  
  public function update(){
    $id = $this->input->post("id");
    $nombre_completo = $this->input->post("nombre_completo");
    $correo = $this->input->post("correo");
    $departamento = $this->input->post("departamento");
    $ci = $this->input->post("ci");
    $telf = $this->input->post("telf");
    $nombre_usuario = $this->input->post("nombre_usuario");
    /* $clave = $this->input->post("clave"); */

    /* validando */
    $colaborador_actual = $this->model_colaboradores->get($id);
    if ($ci == $colaborador_actual->CI) {
      $unique = "";
    }else {
      $unique = "|is_unique[usuario.CI]";
    }
    $this->form_validation->set_rules("ci", "ci", "required".$unique);
    $this->form_validation->set_rules("nombre_usuario", "nombre_usuario", "required");
    /* $this->form_validation->set_rules("clave", "clave", "required"); */
    
    if ($this->form_validation->run()){
      $data = array(
        'nombre_completo' => $nombre_completo,
        'correo' => $correo,
        'departamento' => $departamento,
        'ci' => $ci,
        'telf' => $telf,
        'NOMBRE_USUARIO' => $nombre_usuario,
        /* 'CLAVE' => sha1($clave),
        'CLAVE_TEMPORAL' => sha1($clave) */
      );

      if ($this->model_colaboradores->update($id, $data)) {
        redirect(base_url()."admin/colaboradores");
      }else {
        $this->session->set_flashdata("error", "No se pudo editar!".$id);
        redirect(base_url()."admin/colaboradores/edit/".$id);
      }
    }else {
      $this->edit($id);
    }  
  }

  /* public function view($id){
    $data = array(
      'usuario' => $this->model_colaboradores->get($id)
    );
    $this->load->view('admin/colaboradores/view', $data);
  } */

  public function delete($id){
    $this->model_colaboradores->delete($id);
    echo "admin/colaboradores";
  }
}