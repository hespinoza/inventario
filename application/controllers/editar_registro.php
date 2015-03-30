<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Editar_registro extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('editar_registro_model');
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
		$this->load->model('editar_registro_model');
		$resultado = $this->editar_registro_model->index($variable);
		$data['resultado'] = $resultado;
		$this->load->view('editar_registro_view', $data);
		}

	public function muebles()
	{
		
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'master')
		{
			redirect(base_url().'login');
		}
		$variable = $this->input->post('username');
		$this->load->model('editar_registro_model');
		$resultado = $this->editar_registro_model->mobiliario($variable);
		$data['resultado'] = $resultado;
		$this->load->view('editar_mobiliario_view', $data);
		}
		

	}

	




?>