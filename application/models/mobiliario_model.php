<?php
 class Mobiliario_model extends CI_Model {
 
 function Mobiliario_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $muebles = $this->db->get('muebles'); //obtenemos la tabla 'users'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.

 return $muebles->result(); //devolvemos el resultado de lanzar la query.
 }

 function getCorp() {
 $muebles = $this->db->query(" select * from muebles where pais like 'Corp' ");

 return $muebles->result(); //devolvemos el resultado de lanzar la query.
 }

 function getChile() {
 $muebles = $this->db->query(" select * from muebles where pais like 'Chile' ");

 return $muebles->result(); //devolvemos el resultado de lanzar la query.
 }

 function getBrasil() {
 $muebles = $this->db->query(" select * from muebles where pais like 'Brasil' ");

 return $muebles->result(); //devolvemos el resultado de lanzar la query.
 }

 function getColombia() {
 $muebles = $this->db->query(" select * from muebles where pais like 'Colombia' ");

 return $muebles->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>