<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutores extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model("model_tutores");
  }

	public function index(){
    $data = array(
      'tutores' => $this->model_tutores->getAll(),
    );
		$this->load->view('header');
		$this->load->view('admin/tutores/t_vista_listar', $data);
		$this->load->view('footer');
  }
  public function add(){
		$this->load->view('header');
		$this->load->view('admin/tutores/t_vista_add');
		$this->load->view('footer');
  }
  public function store(){
    $nombre = $this->input->post("nombre");
    $ap_paterno = $this->input->post("ap_paterno");
    $ap_materno = $this->input->post("ap_materno");
    $fecha_nacimiento = $this->input->post("fecha_nacimiento");
    $estado_civil = $this->input->post("estado_civil");
    $ci = $this->input->post("ci");
    $fecha_registro = $this->input->post("fecha_registro");
  
    /* validando */
    $this->form_validation->set_rules("ci", "ci", "required|is_unique[usuario.CI]");

    if ($this->form_validation->run()){
      $data = array(
        'nombre' => $nombre,
        'ap_paterno' => $ap_paterno,
        'ap_materno' => $ap_materno,
        'fecha_nacimiento' => $fecha_nacimiento,
        'estado_civil' => $estado_civil,
        'ci' => $ci,
        'fecha_registro' => $fecha_registro
      );
      if ($this->model_tutores->save($data)){
        redirect(base_url()."admin/tutores");
      }else {
        $this->session->set_flashdata("error", "No se pudo registrar!");
        redirect(base_url()."admin/tutores/add");
      }
    }else {
      $this->add();
    }
  }

  public function edit($id){
    $data = array(
      'tutor' => $this->model_tutores->get($id)
    );
    $this->load->view('header');
		$this->load->view('admin/tutores/t_vista_edit', $data);
		$this->load->view('footer');
  }
  
  public function update(){
    $id = $this->input->post("id");
    $nombre = $this->input->post("nombre");
    $ap_paterno = $this->input->post("ap_paterno");
    $ap_materno = $this->input->post("ap_materno");
    $fecha_nacimiento = $this->input->post("fecha_nacimiento");
    $estado_civil = $this->input->post("estado_civil");
    $ci = $this->input->post("ci");
    $fecha_registro = $this->input->post("fecha_registro");

    $data = array(
      'nombre' => $nombre,
      'ap_paterno' => $ap_paterno,
      'ap_materno' => $ap_materno,
      'fecha_nacimiento' => $fecha_nacimiento,
      'estado_civil' => $estado_civil,
      'ci' => $ci,
      'fecha_registro' => $fecha_registro
    );

    if ($this->model_tutores->update($id, $data)) {
      redirect(base_url()."admin/tutores");
    }else {
      $this->session->set_flashdata("error", "No se pudo editar!".$id);
      redirect(base_url()."admin/tutores/edit/".$id);
    }
  }

  public function view($id){
    $data = array(
      'tutor' => $this->model_tutores->get($id)
    );
    $this->load->view('admin/tutores/view', $data);
  }

  public function delete($id){
    $this->model_tutores->delete($id);
    echo "admin/tutores";
    //$this->load->view('admin/tutores', $data);
  }
}