<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visitas extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('visitas_model');
        $this->load->library(array('encrypt','session'));
        $this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		$visitas = $this->visitas_model->getData(); 
		foreach ($visitas as $v) {
			echo 'Esta pagina tiene '.$v->visitas.' visitas';
			$vis = $v->visitas;
			$editar = $this->visitas_model->updateData($vis);
		}

		
	}
}
?>