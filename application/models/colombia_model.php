<?php
 class Colombia_model extends CI_Model {
 
 function Colombia_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $productos = $this->db->query(" select * from productos where pais like 'Colombia' "); 

 return $productos->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>