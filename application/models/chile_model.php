<?php
 class Chile_model extends CI_Model {
 
 function Chile_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $productos = $this->db->query(" select * from productos where pais like 'Chile' "); 

 return $productos->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>