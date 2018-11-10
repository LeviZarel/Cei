<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_relacion_tutor extends CI_Model {

  public function getAll(){
    $resultados = $this->db->get("relacion_tutor");
    return $resultados->result();
  }
  public function save($data){
    return $this->db->insert("relacion_tutor", $data);
  }
  public function get($id){
    $this->db->where("id_relacion_tutor", $id);
    $resultado = $this->db->get("relacion_tutor");
    return $resultado->row();
  }

  public function update($id, $data){
    $this->db->where("id_relacion_tutor", $id);
    return $this->db->update("relacion_tutor", $data);
  }

  public function delete($id){
    $this->db->where("id_relacion_tutor",$id);
    $this->db->delete("relacion_tutor");
  }
}