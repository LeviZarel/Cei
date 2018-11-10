<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tipo_preguntas extends CI_Model {

  public function getAll(){
    //$this->db->where("habilitado","1");
    $resultados = $this->db->get("tipo_pregunta");
    return $resultados->result();
  }
  public function save($data){
    return $this->db->insert("tipo_pregunta", $data);
  }
  public function get($id){
    $this->db->where("id_tipo_pregunta", $id);
    $resultado = $this->db->get("tipo_pregunta");
    return $resultado->row();
  }

  public function update($id, $data){
    $this->db->where("id_tipo_pregunta", $id);
    return $this->db->update("tipo_pregunta", $data);
  }

  public function delete($id){
    $this->db->where("id_tipo_pregunta",$id);
    $this->db->delete("tipo_pregunta");
  }
}