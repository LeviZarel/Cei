<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pruebas extends CI_Model {

  public function getAll(){
    $this->db->where("habilitado","1");
    $resultados = $this->db->get("prueba");
    return $resultados->result();
  }
  public function save($data){
    return $this->db->insert("prueba", $data);
  }
  public function get($id){
    $this->db->where("id_prueba", $id);
    $resultado = $this->db->get("prueba");
    return $resultado->row();
  }

  public function update($id, $data){
    $this->db->where("id_prueba", $id);
    return $this->db->update("prueba", $data);
  }

  public function delete($id){
    $this->db->where("id_prueba",$id);
    $this->db->delete("prueba");
  }
}