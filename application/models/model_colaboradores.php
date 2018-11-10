<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_colaboradores extends CI_Model {

  public function getColaboradores(){
    $resultados = $this->db->get("usuario");
    return $resultados->result();
  }

  public function save($data){
    return $this->db->insert("usuario", $data);
  }

  public function get($id){
    $this->db->where("id_usuario", $id);
    $resultado = $this->db->get("usuario");
    return $resultado->row();
  }

  public function update($id, $data){
    $this->db->where("id_usuario", $id);
    return $this->db->update("usuario", $data);
  }

  public function delete($id){
    $this->db->where("id_usuario",$id);
    $this->db->delete("usuario");
  }
}