<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model("model_grupo");
  }

	public function index(){
    $data = array(
      'grupos' => $this->model_grupo->getAll()
    );
		$this->load->view('header');
		$this->load->view('admin/grupos/g_vista_listar', $data);
		$this->load->view('footer');
  }
  public function add(){
		$this->load->view('header');
		$this->load->view('admin/grupos/g_vista_add');
		$this->load->view('footer');
  }
  public function store(){
    $nombre = $this->input->post("nombre");
    $descripcion = $this->input->post("descripcion");
    /* validando */
    $this->form_validation->set_rules("nombre", "nombre", "required|is_unique[grupo.NOMBRE]");
    $this->form_validation->set_rules("descripcion", "descripcion", "required");
    
    if ($this->form_validation->run()){
      $data_grupo = array(
        'nombre' => $nombre,
        'descripcion' => $descripcion,
        'habilitado' => "1"
      );
      if ($this->model_grupo->save($data_grupo)){
        redirect(base_url()."admin/grupos");
      }else {
        $this->session->set_flashdata("error", "No se pudo registrar!");
        redirect(base_url()."admin/grupos/add");
      }
    }else {
      $this->add();
    }
  }

  public function edit($id){
    $data = array(
      'grupo' => $this->model_grupo->get($id)
    );
    $this->load->view('header');
		$this->load->view('admin/grupos/g_vista_edit', $data);
		$this->load->view('footer');
  }
  
  public function update(){
    $id = $this->input->post("id");
    $nombre = $this->input->post("nombre");
    $descripcion = $this->input->post("descripcion");

    /* validando */
    $grupo_actual = $this->model_grupo->get($id);
    if ($nombre == $grupo_actual->NOMBRE) {
      $unique = "";
    }else {
      $unique = "|is_unique[grupo.NOMBRE]";
    }
    $this->form_validation->set_rules("nombre", "nombre", "required".$unique);
    $this->form_validation->set_rules("descripcion", "descripcion", "required");
    
    if ($this->form_validation->run()){
      $data = array(
        'nombre' => $nombre,
        'descripcion' => $descripcion
      );

      if ($this->model_grupo->update($id, $data)) {
        redirect(base_url()."admin/grupos");
      }else {
        $this->session->set_flashdata("error", "No se pudo editar!".$id);
        redirect(base_url()."admin/grupos/edit/".$id);
      }
    }else {
      $this->edit($id);
    }  
  }

  public function delete($id){
    $data = array (
      'habilitado' => '0'
    );
    $this->model_grupo->update($id, $data);
    echo "admin/grupos";
  }
}