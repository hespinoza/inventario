<?php
 class Mobiliario_corp_model extends CI_Model {
 
 function Mobiliario_corp_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $muebles = $this->db->query(" select * from muebles where pais like 'Corp' "); 

 return $muebles->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>