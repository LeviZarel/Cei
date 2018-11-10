<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tutores extends CI_Model {

  public function getAll(){
    $resultados = $this->db->get("tutor");
    return $resultados->result();
  }
  public function save($data){
    return $this->db->insert("tutor", $data);
  }
  public function get($id){
    $this->db->where("id_tutor", $id);
    $resultado = $this->db->get("tutor");
    return $resultado->row();
  }

  public function update($id, $data){
    $this->db->where("id_tutor", $id);
    return $this->db->update("tutor", $data);
  }

  public function delete($id){
    $this->db->where("id_tutor",$id);
    $this->db->delete("tutor");
  }
}