<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_preguntas extends CI_Model {

  public function getAll(){
    /* combinando consulta */
    $this->db->select("p.* ,  t.NOMBRE as ID_PRUEBA, tp.TIPO_PREGUNTA as ID_TIPO_PREGUNTA");
    //
    $this->db->from("pregunta p");
    $this->db->join("prueba t", "p.ID_PRUEBA = t.ID_PRUEBA");//prueba es test tambien asi q uso  T
    $this->db->join("tipo_pregunta tp", "p.ID_TIPO_PREGUNTA = tp.ID_TIPO_PREGUNTA");
    $this->db->where("p.HABILITADO", "1");
    $resultados = $this->db->get();
    return $resultados->result();
  }

  public function save($data){
    return $this->db->insert("pregunta", $data);
  }
  
  public function get($id){
    $this->db->where("id_pregunta", $id);
    $resultado = $this->db->get("pregunta");
    return $resultado->row();
  }

  public function update($id, $data){
    $this->db->where("id_pregunta", $id);
    return $this->db->update("pregunta", $data);
  }

  public function delete($id){
    $this->db->where("id_pregunta",$id);
    $this->db->delete("pregunta");
  }
}