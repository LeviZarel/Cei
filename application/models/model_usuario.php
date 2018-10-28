<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usuario extends CI_Model {

  public function login($username, $password){
    $this->db->where("NOMBRE_USUARIO", $username);
    $this->db->where("CLAVE", sha1($password));
 
    $resultados = $this->db->get("usuario");
    if($resultados->num_rows() > 0){
      return $resultados->row();
    }else{
      return false;
    }
  }

  public function getNombreFacilitador($id_usuario){
    $this->db->where("ID_USUARIO", $id_usuario);
 
    $resultados = $this->db->get("facilitador");
    if($resultados->num_rows() > 0){
      return $resultados->row();
    }else{
      return false;
    }
  }
}