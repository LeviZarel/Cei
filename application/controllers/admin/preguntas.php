<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preguntas extends CI_Controller {

  public function __construct(){
    parent::__construct();
    /* $this->load->helper(array('form', 'url')); */// esto no hace nada
    $this->load->model("model_preguntas");
    $this->load->model("model_pruebas");
    $this->load->model("model_tipo_preguntas");
  }

	public function index(){
    $data = array(
      'preguntas' => $this->model_preguntas->getAll(),
    );
		$this->load->view('header');
		$this->load->view('admin/preguntas/p_vista_listar', $data);
		$this->load->view('footer');
  }
  public function add(){
    $data = array(
      'pruebas' => $this->model_pruebas->getAll(),
      'tipo_preguntas' => $this->model_tipo_preguntas->getAll(),
    );
		$this->load->view('header');
		$this->load->view('admin/preguntas/p_vista_add', $data);
		$this->load->view('footer');
  }
  /* public function store(){
    $nombre = $this->input->post("nombre");
    $ap_paterno = $this->input->post("ap_paterno");
    $ap_materno = $this->input->post("ap_materno");
    $grupo = $this->input->post("grupo");
    $fecha_nacimiento = $this->input->post("fecha_nacimiento");
    $genero = $this->input->post("genero");
    $ci = $this->input->post("ci");
    $fecha_registro = $this->input->post("fecha_registro");
    $tutor = $this->input->post("tutor");
    $relacion = $this->input->post("relacion");
    //para la imagen
    $config = array(
      'upload_path' => './assets/img/preguntas/upload',
      'allowed_types' => 'png|jpg'
    );
    $this->load->library("upload", $config);

    if ($this->upload->do_upload('foto')) {
      $foto_data= array(
        'upload_data' => $this->upload->data()
      );
      $data = array(
        'id_tutor' => $tutor,
        'id_relacion_tutor' => $relacion,
        'id_grupo' => $grupo,
        'url_foto' => $foto_data['upload_data']['file_name'],
        'nombre' => $nombre,
        'ap_paterno' => $ap_paterno,
        'ap_materno' => $ap_materno,
        'genero' => $genero,
        'ci' => $ci,
        'fecha_nacimiento' => $fecha_nacimiento,     
        'fecha_registro' => $fecha_registro,
        'habilitado' => "1"
      );
      if ($this->model_preguntas->save($data)){
        redirect(base_url()."admin/preguntas");
      }else {
        $this->session->set_flashdata("error", "No se pudo registrar!");
        redirect(base_url()."admin/preguntas/add");
      }
    }else {
      echo $this->upload->display_errors();
    }

    
  }

  public function edit($id){
    $data = array(
      'nino' => $this->model_preguntas->get($id),
      'tutores' => $this->model_tutores->getAll(),
      'grupos' => $this->model_grupo->getAll(),
      'relacion_tutores' => $this->model_relacion_tutor->getAll(),
    );
		$this->load->view('header');
		$this->load->view('admin/preguntas/n_vista_edit', $data);
		$this->load->view('footer');
  }
  
  public function update(){
    $id = $this->input->post("id");
    $nombre = $this->input->post("nombre");
    $ap_paterno = $this->input->post("ap_paterno");
    $ap_materno = $this->input->post("ap_materno");

    $grupo = $this->input->post("grupo");
    $fecha_nacimiento = $this->input->post("fecha_nacimiento");
    $genero = $this->input->post("genero");
    $ci = $this->input->post("ci");
    $fecha_registro = $this->input->post("fecha_registro");
    $tutor = $this->input->post("tutor");
    $relacion = $this->input->post("relacion");
    //para la imagen
    $config = array(
      'upload_path' => './assets/img/preguntas/upload',
      'allowed_types' => 'png|jpg'
    );
    $this->load->library("upload", $config);

    if ($this->upload->do_upload('foto_edit')) {
      $foto_data= array(
        'upload_data' => $this->upload->data()
      );
      $foto_actual= $foto_data['upload_data']['file_name'];
      $foto_antigua = $this->model_preguntas->get($id)->URL_FOTO;
      unlink('./assets/img/preguntas/upload/'.$foto_antigua);

      $data = array(
        'id_tutor' => $tutor,
        'id_relacion_tutor' => $relacion,
        'id_grupo' => $grupo,
        'url_foto' => $foto_actual,
        'nombre' => $nombre,
        'ap_paterno' => $ap_paterno,
        'ap_materno' => $ap_materno,
        'genero' => $genero,
        'ci' => $ci,
        'fecha_nacimiento' => $fecha_nacimiento,     
        'fecha_registro' => $fecha_registro
      );

      if ($this->model_preguntas->update($id, $data)) {
        redirect(base_url()."admin/preguntas");
      }else {
        $this->session->set_flashdata("error", "No se pudo editar!".$id);
        redirect(base_url()."admin/preguntas/edit/".$id);
      }
    }else {
      echo $this->upload->display_errors();
    }  
  }*/

  /* public function delete($id){
    $foto_antigua = $this->model_preguntas->get($id)->URL_FOTO;//para eliminar foto
    unlink('./assets/img/preguntas/upload/'.$foto_antigua);//para eliminar foto
    $this->model_preguntas->delete($id);
    echo "admin/preguntas";
  } */
}