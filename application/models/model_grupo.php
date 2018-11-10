<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_grupo extends CI_Model {

  public function getAll(){
    $this->db->where("habilitado","1");
    $resultados = $this->db->get("grupo");
    return $resultados->result();
  }
  public function save($data){
    return $this->db->insert("grupo", $data);
  }
  public function get($id){
    $this->db->where("id_grupo", $id);
    $resultado = $this->db->get("grupo");
    return $resultado->row();
  }

  public function update($id, $data){
    $this->db->where("id_grupo", $id);
    return $this->db->update("grupo", $data);
  }

  public function delete($id){
    $this->db->where("id_grupo",$id);
    $this->db->delete("grupo");
  }
}