<?php
 class Brasil_model extends CI_Model {
 
 function Brasil_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $productos = $this->db->query(" select * from productos where pais like 'Brasil' "); 

 return $productos->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>