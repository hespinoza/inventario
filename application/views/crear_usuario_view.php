<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Directorio Comparaonline - Nuevo Producto</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="http://www.comparaonline.cl/assets/favicon-9ffeae5a10a5c86a081d5208da7c9566.ico">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>"><img src="http://blog.comparaonline.cl/wp-content/themes/blog-servicios/images/layout/comparaonline_logo.png" width="127" height="33" ></a>
            
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <li>
                    <a class="btn btn-default" href="<?=base_url().'master_mobiliario'?>">Mobiliario</a>
                </li>
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a><i class="fa fa-user fa-fw"></i> </a>
                        </li>
                        <li class="divider"></li>
                        <li><?=anchor(base_url().'login/logout_ci', 'Desloguear')?>
                        </li>
                    </ul>
                </li>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?=base_url().'master_inventario'?>"><i class="fa fa-edit fa-fw"></i> Todos</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_chile'?>"><i class="fa fa-edit fa-fw"></i> Chile</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_brasil'?>"><i class="fa fa-edit fa-fw"></i> Brasil</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_colombia'?>"><i class="fa fa-edit fa-fw"></i> Colombia</a>
                        </li>
                       
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nuevo Producto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Complete todos los campos solicitados
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                         <?=form_open(base_url().'submit_usuario/insertar_comentarios','role="form"');
//aqui se procesará nuestro formulario, controlador comentarios, función insertar_comentarios
//creamos los arrays que compondran nuestro formulario
//primer array con el input que se llamará nombre y será donde introduciremos el mismo
 
    $codigo = array(
        'name' => 'codigo',
        'id' => 'codigo',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('codigo') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
    );
 
//el segundo array(campo email)
 
    $nombre = array(
        'name' => 'nombre',
        'id' => 'nombre',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('nombre')
    );
 
 $marca = array(
        'name' => 'marca',
        'id' => 'marca',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('marca')
    );
//el tercero...(campo asunto)
    $producto = array(
        'name' => 'producto',
        'id' => 'producto',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('producto')
    );
 
 $tipo = array(
        'name' => 'tipo',
        'id' => 'tipo',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('tipo')
    );
    
    $opciones_estado = array(
                  'none' => '',
                  'Disponible' => 'Disponible',
                  'En Uso' => 'En Uso',
                  'En Bodega' => 'En Bodega',
                  'Expirado' => 'Expirado',
                );
//el cuarto...(campo mensaje)
    $estado = array(
        'name' => 'estado',
        'id' => 'estado',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_select('estado')
    );
    
$usuario = array(
        'name' => 'usuario',
        'id' => 'usuario',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('usuario')
    );

$departamento = array(
        'name' => 'departamento',
        'id' => 'departamento',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('departamento')
    );

    $opciones_pais = array(
                  'none' => '',
                  'Chile' => 'Chile',
                  'Brasil' => 'Brasil',
                  'Colombia' => 'Colombia',
                );
//el cuarto...(campo mensaje)
    $pais = array(
        'name' => 'pais',
        'id' => 'pais',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('pais')
    );

    $so = array(
        'name' => 'so',
        'id' => 'so',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('so')
    );
    
    $version = array(
        'name' => 'version',
        'id' => 'version',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('version')
    );

    $procesador = array(
        'name' => 'procesador',
        'id' => 'procesador',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('procesador')
    );
 
 $ram = array(
        'name' => 'ram',
        'id' => 'ram',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('ram')
    );

 $disco = array(
        'name' => 'disco',
        'id' => 'disco',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('disco')
    );

     $opciones_licencia = array(
                  'none' => '',
                  'Si' => 'Si',
                  'No' => 'No',
                );
//el cuarto...(campo mensaje)
    $licencia = array(
        'name' => 'licencia',
        'id' => 'licencia',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('licencia')
    );
//el botón submit de nuestro formulario
    $submit = array(
        'name' => 'submit',
        'class' => 'btn btn-primary',
        'id' => 'submit',
        'value' => 'Registrar Contacto',
        'title' => 'Registrar Contacto'
    );
    ?>
<?php
echo form_fieldset('');
?>
            
                
                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Codigo: '); ?></label>
                        <?php echo form_input($codigo); ?>
                        <?php echo form_error('codigo'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Nombre: '); ?></label>
                        <?php echo form_input($nombre); ?>
                        <?php echo form_error('nombre'); ?>
                        </div>
                    </div>
                    
                        
                 
                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Marca: '); ?></label>
                        <?php echo form_input($marca); ?>
                        <?php echo form_error('marca'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Modelo: '); ?></label>
                        <?php echo form_input($producto); ?>
                        <?php echo form_error('producto'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Tipo: '); ?></label>
                        <?php echo form_input($tipo); ?>
                        <?php echo form_error('tipo'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Estado: '); ?></label>
                        <?php echo form_dropdown('estado', $opciones_estado, 'none', 'class="form-control" id="estado"'); ?>
                        <p class="help-block"><?php echo form_error('estado'); ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Usuario: '); ?></label>
                        <?php echo form_input($usuario); ?>
                        <?php echo form_error('usuario'); ?>
                    </div>
                    <div class="col-md-6">
                        <label><?php echo form_label('Departamento: '); ?></label>
                        <?php echo form_input($departamento); ?>
                        <?php echo form_error('departamento'); ?>
                    </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Pais: '); ?></label>
                        <?php echo form_dropdown('pais', $opciones_pais, 'none', 'class="form-control" id="pais"'); ?>
                        <p class="help-block"><?php echo form_error('pais'); ?></p>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Sistema Operativo: '); ?></label>
                        <?php echo form_input($so); ?>
                        <?php echo form_error('so'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Version: '); ?></label>
                        <?php echo form_input($version); ?>
                        <?php echo form_error('version'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Procesador: '); ?></label>
                        <?php echo form_input($procesador); ?>
                        <?php echo form_error('procesador'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Memoria RAM: '); ?></label>
                        <?php echo form_input($ram); ?>
                        <?php echo form_error('ram'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Disco Duro: '); ?></label>
                        <?php echo form_input($disco); ?>
                        <?php echo form_error('disco'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Licencia: '); ?></label>
                        <?php echo form_dropdown('licencia', $opciones_licencia, 'none', 'class="form-control" id="licencia"'); ?>
                        <p class="help-block"><?php echo form_error('licencia'); ?></p>
                        </div>
                    </div>


                    <div class="row-fluid">
                        <hr>
                    </div> 
                    <div class="form-group">
                    <div class="col-md-6">
                        <?php echo form_submit($submit); ?>
                    </div>
                    </div>          
            <?php
                echo form_close();
            ?>
        
        <?php
               echo form_fieldset_close();
       ?>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                </div>
                </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    <!-- /#wrapper -->
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>