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
  
  public function store(){
    $prueba = $this->input->post("prueba");
    $instruccion = $this->input->post("instruccion");
    $descripcion = $this->input->post("descripcion");
    $tres = $this->input->post("tres");
    $dos = $this->input->post("dos");
    $uno = $this->input->post("uno");
    $cero = $this->input->post("cero");

    $tipo_pregunta = $this->input->post("tipo_pregunta");
    $campo_respuesta = '';// para el valor de 1
    if($tipo_pregunta==2) {
        // subir audio
        $config = array(
          'upload_path' => './assets/audio/preguntas/upload',
          'allowed_types' => 'mp3|ogg|mp4'
        );
        $this->load->library("upload", $config);

        if ($this->upload->do_upload('audio')) {
          $audio_data= array(
            'upload_data' => $this->upload->data()
          );
          $campo_respuesta = $audio_data['upload_data']['file_name'];        
        }else {
          echo $this->upload->display_errors();
        }// fin subir audio
    }else if($tipo_pregunta==3) {
        // imagen
        $config = array(
          'upload_path' => './assets/img/preguntas/upload',
          'allowed_types' => 'png|jpg'
        );
        $this->load->library("upload", $config);

        if ($this->upload->do_upload('imagen')) {
          $foto_data= array(
            'upload_data' => $this->upload->data()
          );
          $campo_respuesta = $foto_data['upload_data']['file_name'];        
        }else {
          echo $this->upload->display_errors();
        }// fin imagen 
    }else if($tipo_pregunta==4) {
      // oraciones
      $campo_respuesta = $this->input->post("oraciones");
    }else if($tipo_pregunta==5) {
      // preguntas
      $campo_respuesta = $this->input->post("preguntas");
    }
    //guardo datos
    $data = array(
      'id_tipo_pregunta' => $tipo_pregunta,
      'id_prueba' => $prueba,
      'instruccion' => $instruccion,
      'pregunta' => $descripcion,
      'resp_3' => $tres,
      'resp_2' => $dos,
      'resp_1' => $uno,
      'resp_0' => $cero,
      'campo_respuesta' => $campo_respuesta,
      'habilitado' => "1"
    );
    if ($this->model_preguntas->save($data)){
      redirect(base_url()."admin/preguntas");
    }else {
      $this->session->set_flashdata("error", "No se pudo registrar!");
      redirect(base_url()."admin/preguntas/add");
    }
  }

  public function edit($id){
    $data = array(
      'pregunta' => $this->model_preguntas->get($id),
      'pruebas' => $this->model_pruebas->getAll(),
      'tipo_preguntas' => $this->model_tipo_preguntas->getAll(),
    );
		$this->load->view('header');
		$this->load->view('admin/preguntas/p_vista_edit', $data);
		$this->load->view('footer');
  }
  
  public function update(){
    $id = $this->input->post("id"); 
    $prueba = $this->input->post("prueba");
    $instruccion = $this->input->post("instruccion");
    $descripcion = $this->input->post("descripcion");
    $tres = $this->input->post("tres");
    $dos = $this->input->post("dos");
    $uno = $this->input->post("uno");
    $cero = $this->input->post("cero");

    $tipo_pregunta = $this->input->post("tipo_pregunta");
    $campo_respuesta = '';// para el valor de 1
    if($tipo_pregunta==2) {
      // subir audio
      $config = array(
        'upload_path' => './assets/audio/preguntas/upload',
        'allowed_types' => 'mp3|ogg|mp4'
      );
      $this->load->library("upload", $config);

      if ($this->upload->do_upload('audio')) {
        $audio_data= array(
          'upload_data' => $this->upload->data()
        );
        $audio_antiguo = $this->model_preguntas->get($id)->CAMPO_RESPUESTA;
        unlink('./assets/audio/preguntas/upload/'.$audio_antiguo);
        $campo_respuesta = $audio_data['upload_data']['file_name'];  
        if($campo_respuesta=='')
          $campo_respuesta = $audio_antiguo;  
      }else {
        echo $this->upload->display_errors();
      }// fin subir audio
    }else if($tipo_pregunta==3) {
        // imagen
        $config = array(
          'upload_path' => './assets/img/preguntas/upload',
          'allowed_types' => 'png|jpg'
        );
        $this->load->library("upload", $config);

        if ($this->upload->do_upload('imagen')) {
          $foto_data= array(
            'upload_data' => $this->upload->data()
          );
          //$foto_actual= $foto_data['upload_data']['file_name'];
          $foto_antigua = $this->model_preguntas->get($id)->CAMPO_RESPUESTA;
          unlink('./assets/img/preguntas/upload/'.$foto_antigua);
          $campo_respuesta = $foto_data['upload_data']['file_name'];        
        }else {
          echo $this->upload->display_errors();
        }// fin imagen 
    }else if($tipo_pregunta==4) {
      // oraciones
      $campo_respuesta = $this->input->post("oraciones");
    }else if($tipo_pregunta==5) {
      // preguntas
      $campo_respuesta = $this->input->post("preguntas");
    }
    //guardo datos
    $data = array(
      'id_tipo_pregunta' => $tipo_pregunta,
      'id_prueba' => $prueba,
      'instruccion' => $instruccion,
      'pregunta' => $descripcion,
      'resp_3' => $tres,
      'resp_2' => $dos,
      'resp_1' => $uno,
      'resp_0' => $cero,
      'campo_respuesta' => $campo_respuesta
    );

    if ($this->model_preguntas->update($id, $data)) {
      redirect(base_url()."admin/preguntas");
    }else {
      $this->session->set_flashdata("error", "No se pudo editar!".$id);
      redirect(base_url()."admin/preguntas/edit/".$id);
    }
  }

  public function delete($id){
    $pregunta_recuperada = $this->model_preguntas->get($id);
    if($pregunta_recuperada->ID_TIPO_PREGUNTA==2){// audio
      $audio = $pregunta_recuperada->CAMPO_RESPUESTA;
      unlink('./assets/audio/preguntas/upload/'.$audio);
    }else if ($pregunta_recuperada->ID_TIPO_PREGUNTA==3){// imagen
      $imagen = $pregunta_recuperada->CAMPO_RESPUESTA;
      unlink('./assets/img/preguntas/upload/'.$imagen);
    }  
    $this->model_preguntas->delete($id);
    echo "admin/preguntas";
  }
}