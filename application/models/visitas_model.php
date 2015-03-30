<?php
 class Visitas_model extends CI_Model {
 
 function Visitas_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $visitas = $this->db->query(" select visitas from visitas "); 


 return $visitas->result(); //devolvemos el resultado de lanzar la query.
 }

 function updateData()
    {
        $editar = $this->db->query("update visitas set visitas = visitas+1");
       
    }
}
?>