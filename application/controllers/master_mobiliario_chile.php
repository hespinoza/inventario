<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_mobiliario_chile extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('mobiliario_model');
        $this->load->library(array('encrypt','session'));
        $this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'master')
		{
			redirect(base_url().'login');
		}
		$muebles = $this->mobiliario_model->getChile(); 
		 $data['muebles'] = $muebles;
		 $this->load->view('master_mobiliario_chile_view',$data);

	}
}
?>