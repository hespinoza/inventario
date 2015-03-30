<?php
 class Mobiliario_colombia_model extends CI_Model {
 
 function Mobiliario_colombia_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $muebles = $this->db->query(" select * from muebles where pais like 'Colombia' "); 

 return $muebles->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>