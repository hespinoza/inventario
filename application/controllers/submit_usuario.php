<?php
class Submit_usuario extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('submit_usuario_model');
        $this->load->library(array('encrypt', 'form_validation'));
        $this->load->helper(array('form', 'url'));
    }
    
    function index()
    {
        $this->load->view('crear_usuario_view');
    }
    
    //funcion para procesar el formulario
    function insertar_comentarios()
    {
        //si se ha pulsado el botón submit validamos el formulario con codeIgniter
        if($this->input->post('submit'))
        {
            $this->form_validation->set_error_delimiters('<div class="bg-danger" role="alert">', '</div>');
            //hacemos las comprobaciones que deseemos en nuestro formulario
            $this->form_validation->set_rules('codigo','Codigo','required');
            $this->form_validation->set_rules('producto','Modelo','required');
            $this->form_validation->set_rules('nombre','Nombre','required');
            $this->form_validation->set_rules('marca','Marca','required');
            $this->form_validation->set_rules('tipo','Tipo','');
            $this->form_validation->set_rules('estado','Estado','');
            $this->form_validation->set_rules('usuario','Usuario','');
            $this->form_validation->set_rules('departamento','Departamento','');
            $this->form_validation->set_rules('pais','Pais','');
            $this->form_validation->set_rules('so','Sistema Operativo','');
            $this->form_validation->set_rules('version','Version','');
            $this->form_validation->set_rules('procesador','Procesador','');
            $this->form_validation->set_rules('ram','Memoria RAM','');
            $this->form_validation->set_rules('disco','Disco Duro','');
            $this->form_validation->set_rules('licencia','Licencia','');
                       
            //validamos que se introduzcan los campos requeridos con la función de ci required
            $this->form_validation->set_message('required', 'El campo <b>%s</b> es obligatorio');
                  
            
            if ($this->form_validation->run() == FALSE)
            {
                //si no pasamos la validación volvemos al formulario mostrando los errores
                $this->index();
            }
            //si pasamos la validación correctamente pasamos a hacer la inserción en la base de datos
            else 
            {
                $codigo = $this->input->post('codigo'); 
                $nombre = $this->input->post('nombre');    
                $marca = $this->input->post('marca');
                $producto = $this->input->post('producto');   
                $tipo = $this->input->post('tipo'); 
                $estado = $this->input->post('estado');     
                $usuario = $this->input->post('usuario');
                $departamento = $this->input->post('departamento');
                $pais = $this->input->post('pais');
                $so = $this->input->post('so');
                $version = $this->input->post('version'); 
                $procesador = $this->input->post('procesador'); 
                $ram = $this->input->post('ram'); 
                $disco = $this->input->post('disco'); 
                $licencia = $this->input->post('licencia'); 
                
              
                //ahora procesamos los datos hacía el modelo que debemos crear
                $nueva_insercion = $this->submit_usuario_model->nuevo_comentario($codigo,$nombre,$marca,$producto,$tipo,$estado,$usuario,$departamento,$pais,$so,$version,$procesador,$ram,$disco,$licencia);
            redirect(base_url().master_inventario);
            }
        }
    }

      function editar_comentarios()
    {
        //si se ha pulsado el botón submit validamos el formulario con codeIgniter
        if($this->input->post('submit'))
        {
  
                $hidden = $this->input->post('hidden');
                $codigo = $this->input->post('codigo'); 
                $nombre = $this->input->post('nombre');  
                $marca = $this->input->post('marca');  
                $producto = $this->input->post('producto');   
                $tipo = $this->input->post('tipo'); 
                $estado = $this->input->post('estado');     
                $usuario = $this->input->post('usuario');
                $departamento = $this->input->post('departamento');
                $pais = $this->input->post('pais');
                $so = $this->input->post('so');
                $version = $this->input->post('version'); 
                $procesador = $this->input->post('procesador'); 
                $ram = $this->input->post('ram'); 
                $disco = $this->input->post('disco'); 
                $licencia = $this->input->post('licencia'); 
                
              
                //ahora procesamos los datos hacía el modelo que debemos crear
                $nueva_edicion = $this->submit_usuario_model->editar_comentario($hidden,$codigo,$nombre,$marca,$producto,$tipo,$estado,$usuario,$departamento,$pais,$so,$version,$procesador,$ram,$disco,$licencia);
            redirect(base_url().master_inventario);
            
        }
    }
    function editar_mobiliario()
    {
        //si se ha pulsado el botón submit validamos el formulario con codeIgniter
        if($this->input->post('submit'))
        {
  
                $hidden = $this->input->post('hidden');
                $codigo = $this->input->post('codigo'); 
                $articulo = $this->input->post('articulo');    
                $marca = $this->input->post('marca');   
                $descripcion = $this->input->post('descripcion'); 
                $cantidad = $this->input->post('cantidad');     
                $pais = $this->input->post('pais'); 
                
              
                //ahora procesamos los datos hacía el modelo que debemos crear
                $nueva_edicion = $this->submit_usuario_model->editar_mobiliario($hidden,$codigo,$articulo,$marca,$descripcion,$cantidad,$pais);
            redirect(base_url().master_mobiliario);
            
        }
    }

    function insertar_mobiliario()
    {
        //si se ha pulsado el botón submit validamos el formulario con codeIgniter
        if($this->input->post('submit'))
        {
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
            //hacemos las comprobaciones que deseemos en nuestro formulario
            $this->form_validation->set_rules('codigo','Codigo','required');
            $this->form_validation->set_rules('articulo','Articulo','required');
            $this->form_validation->set_rules('cantidad','Cantidad','required');
            $this->form_validation->set_rules('pais','Pais','required');
                       
            //validamos que se introduzcan los campos requeridos con la función de ci required
            $this->form_validation->set_message('required', 'El campo <b>%s</b> es obligatorio');
                  
            
            if ($this->form_validation->run() == FALSE)
            {
                //si no pasamos la validación volvemos al formulario mostrando los errores
                $this->index();
            }
            //si pasamos la validación correctamente pasamos a hacer la inserción en la base de datos
            else 
            {
                $codigo = $this->input->post('codigo'); 
                $articulo = $this->input->post('articulo');    
                $marca = $this->input->post('marca');   
                $descripcion = $this->input->post('descripcion'); 
                $cantidad = $this->input->post('cantidad');     
                $pais = $this->input->post('pais'); 
                
              
                //ahora procesamos los datos hacía el modelo que debemos crear
                $nueva_insercion = $this->submit_usuario_model->nuevo_mobiliario($codigo,$articulo,$marca,$descripcion,$cantidad,$pais);
            redirect(base_url().master_mobiliario);
            }
        }
    }
}
 
/*fin del archivo comentarios*/