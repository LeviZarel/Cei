<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pruebas extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model("model_pruebas");
  }

	public function index(){
    $data = array(
      'pruebas' => $this->model_pruebas->getAll()
    );
		$this->load->view('header');
		$this->load->view('admin/pruebas/p_vista_listar', $data);
		$this->load->view('footer');
  }
  public function add(){
		$this->load->view('header');
		$this->load->view('admin/pruebas/p_vista_add');
		$this->load->view('footer');
  }
  public function store(){
    $nombre = $this->input->post("nombre");
    $descripcion = $this->input->post("descripcion");
    $fecha_registro = $this->input->post("fecha_registro");
    /* validando */
    $this->form_validation->set_rules("nombre", "nombre", "required|is_unique[prueba.NOMBRE]");
    $this->form_validation->set_rules("descripcion", "descripcion", "required");
    
    if ($this->form_validation->run()){
      $data_pruebas = array(
        'nombre' => $nombre,
        'descripcion' => $descripcion,
        'fecha_registro' => $fecha_registro,
        'habilitado' => "1"
      );
      if ($this->model_pruebas->save($data_pruebas)){
        redirect(base_url()."admin/pruebas");
      }else {
        $this->session->set_flashdata("error", "No se pudo registrar!");
        redirect(base_url()."admin/pruebas/add");
      }
    }else {
      $this->add();
    }
  }

  public function edit($id){
    $data = array(
      'prueba' => $this->model_pruebas->get($id)
    );
    $this->load->view('header');
		$this->load->view('admin/pruebas/p_vista_edit', $data);
		$this->load->view('footer');
  }
  
  public function update(){
    $id = $this->input->post("id");
    $nombre = $this->input->post("nombre");
    $descripcion = $this->input->post("descripcion");
    $fecha_registro = $this->input->post("fecha_registro");

    /* validando */
    $pruebas_actual = $this->model_pruebas->get($id);
    if ($nombre == $pruebas_actual->NOMBRE) {
      $unique = "";
    }else {
      $unique = "|is_unique[prueba.NOMBRE]";
    }
    $this->form_validation->set_rules("nombre", "nombre", "required".$unique);
    $this->form_validation->set_rules("descripcion", "descripcion", "required");
    
    if ($this->form_validation->run()){
      $data = array(
        'nombre' => $nombre,
        'descripcion' => $descripcion,
        'fecha_registro' => $fecha_registro
      );

      if ($this->model_pruebas->update($id, $data)) {
        redirect(base_url()."admin/pruebas");
      }else {
        $this->session->set_flashdata("error", "No se pudo editar!".$id);
        redirect(base_url()."admin/pruebas/edit/".$id);
      }
    }else {
      $this->edit($id);
    }  
  }

  public function delete($id){
    $data = array (
      'habilitado' => '0'
    );
    $this->model_pruebas->update($id, $data);
    echo "admin/pruebas";
  }
}