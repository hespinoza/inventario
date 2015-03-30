<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Eliminar_registro extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('eliminar_registro_model');
		$this->load->library(array('encrypt','session'));
		$this->load->helper(array('form','url'));
		$this->load->database('default');
	}
	
	public function index()
	{
		
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'master')
		{
			redirect(base_url().'login');
		}
		$variable = $this->input->post('username');
		$this->load->model('eliminar_registro_model');
		$resultado = $this->eliminar_registro_model->index($variable);
		redirect(base_url().master_inventario);

	}

	public function muebles()
	{
		
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'master')
		{
			redirect(base_url().'login');
		}
		$variable = $this->input->post('username');
		$this->load->model('eliminar_registro_model');
		$resultado = $this->eliminar_registro_model->mobiliario($variable);
		redirect(base_url().master_mobiliario);

	}
	

}


?>