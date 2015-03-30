<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_brasil extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('brasil_model');
        $this->load->library(array('encrypt','session'));
        $this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'master')
		{
			redirect(base_url().'login');
		}
		$productos = $this->brasil_model->getData(); 
		 $data['productos'] = $productos;
		 $this->load->view('master_brasil_view',$data);

	}
}
?>