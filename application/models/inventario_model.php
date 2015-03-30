<?php
 class Inventario_model extends CI_Model {
 
 function Inventario_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $productos = $this->db->get('productos'); //obtenemos la tabla 'users'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.

 return $productos->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>