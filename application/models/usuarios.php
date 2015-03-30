<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Usuarios extends CI_Model 
{
    public function get()
    {
        $fields = $this->db->field_data('productos');
        $query = $this->db->select('*')->get('productos');
        return array("fields" => $fields, "query" => $query);
    }
}
 
/* End of file usuarios.php */
/* Location: ./application/models/usuarios.php */