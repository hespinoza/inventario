<?php
 class Editar_registro_model extends CI_Model {
 
 	function Editar_registro_model() {
 		parent::__construct(); //llamada al constructor de Model.
 	}
 
	public function index($variable) {
		$query = $this->db->query("SELECT * FROM productos WHERE id = '$variable'"); 
		$devuelta = $query->result_array();
		return $query->result();
	}

	public function mobiliario($variable) {
		$query = $this->db->query("SELECT * FROM muebles WHERE id = '$variable'"); 
		$devuelta = $query->result_array();
		return $query->result();
	}

 }
 ?>