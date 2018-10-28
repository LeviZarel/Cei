<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_colaboradores extends CI_Model {

  public function getColaboradores(){
    $resultados = $this->db->get("facilitador");
    return $resultados->result();
  }
  public function save_usuario($data){
    return $this->db->insert("usuario", $data);
  }
  public function save_colaborador($data){
    return $this->db->insert("facilitador", $data);
  }
}