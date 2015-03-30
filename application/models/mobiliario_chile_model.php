<?php
 class Mobiliario_chile_model extends CI_Model {
 
 function Mobiliario_chile_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $muebles = $this->db->query(" select * from muebles where pais like 'Chile' "); 

 return $muebles->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>