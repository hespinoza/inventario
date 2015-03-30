<?php
 class Eliminar_registro_model extends CI_Model {
 
 function Eliminar_registro_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
public function index($variable) {
	$query = $this->db->query("delete from productos WHERE id = '$variable'"); 

 }

public function mobiliario($variable) {
	$query = $this->db->query("delete from muebles WHERE id = '$variable'"); 

 }







 }
 ?>