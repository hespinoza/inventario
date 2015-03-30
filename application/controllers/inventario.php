<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventario extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('inventario_model');
        $this->load->library(array('encrypt','session'));
        $this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == 'master')
		{
			redirect(base_url().'login');
		}
		$productos = $this->inventario_model->getData(); 
		 $data['productos'] = $productos;
		 $this->load->view('inventario_view',$data);
	}

	public function excel()
	{
		$productos = $this->inventario_model->getData(); 
		 $data['productos'] = $productos;
		 header("Content-type: application/vnd.ms-excel");
		 header("Content-Disposition: filename=\"inventario.xls\";");
		 $this->load->view('excel_inventario_view',$data);
	}
    





}
?>