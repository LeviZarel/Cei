<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ninos extends CI_Model {

  public function getAll(){
    /* combinando consulta */
    //$this->db->select("n.* , t.NOMBRE as ID_TUTOR");
    $this->db->select("n.* , CONCAT(t.NOMBRE,  ' ', t.AP_PATERNO, ' ', t.AP_MATERNO) as ID_TUTOR");
    //
    $this->db->from("nino n");
    $this->db->join("tutor t", "n.ID_TUTOR = t.ID_TUTOR");
    $this->db->where("n.HABILITADO", "1");
    $resultados = $this->db->get();
    /* $resultados = $this->db->get("nino"); */
    return $resultados->result();
  }

  public function save($data){
    return $this->db->insert("nino", $data);
  }
  
  public function get($id){
    $this->db->where("id_nino", $id);
    $resultado = $this->db->get("nino");
    return $resultado->row();
  }

  public function update($id, $data){
    $this->db->where("id_nino", $id);
    return $this->db->update("nino", $data);
  }

  public function delete($id){
    $this->db->where("id_nino",$id);
    $this->db->delete("nino");
  }
}