<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobiliario_brasil extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('mobiliario_brasil_model');
        $this->load->library(array('encrypt','session'));
        $this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == 'master')
		{
			redirect(base_url().'login');
		}
		$muebles = $this->mobiliario_brasil_model->getData(); 
		 $data['muebles'] = $muebles;
		 $this->load->view('mobiliario_brasil_view',$data);
	}

	public function excel()
	{
		$muebles = $this->mobiliario_brasil_model->getData(); 
		 $data['muebles'] = $muebles;
		 header("Content-type: application/vnd.ms-excel");
		 header("Content-Disposition: filename=\"mobiliarioBrasil.xls\";");
		 $this->load->view('excel_mobiliario_brasil_view.php',$data);
	}
}
?>