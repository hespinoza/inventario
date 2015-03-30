<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brasil extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('brasil_model');
        $this->load->library(array('encrypt','session'));
        $this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == 'master')
		{
			redirect(base_url().'login');
		}
		$productos = $this->brasil_model->getData(); 
		 $data['productos'] = $productos;
		 $this->load->view('brasil_view',$data);
	}

	public function excel()
	{
		$productos = $this->brasil_model->getData(); 
		 $data['productos'] = $productos;
		 header("Content-type: application/vnd.ms-excel");
		 header("Content-Disposition: filename=\"inventarioBrasil.xls\";");
		 $this->load->view('excel_inventario_brasil_view.php',$data);
	}
}
?>