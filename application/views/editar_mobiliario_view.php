<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Directorio Comparaonline - Editar Registro</title>

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
<style>
#izquierda{
    display: inline-block;
}
#derecha{
    display: inline-block;
    float: right;
}
#boton{
    padding-top: 1.5em;
    padding-right: .5em;
    padding-left: 60px;    
}
@media print {
    #with_print {
        display: none;
    }
}
#botones{
        display: inline-block;
    }
</style>
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
                    <a class="btn btn-default" href="<?=base_url().'master_inventario'?>">Productos</a>
                </li>
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
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
                            <a href="<?=base_url().'master_mobiliario'?>"><i class="fa fa-edit fa-fw"></i> Todos</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_mobiliario_corp'?>"><i class="fa fa-edit fa-fw"></i> Corp</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_mobiliario_chile'?>"><i class="fa fa-edit fa-fw"></i> Chile</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_mobiliario_brasil'?>"><i class="fa fa-edit fa-fw"></i> Brasil</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_mobiliario_colombia'?>"><i class="fa fa-edit fa-fw"></i> Colombia</a>
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
                    <h1 class="page-header">Editar Mobiliario</h1>
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
                                    <?foreach ($resultado as $p) { ?>
                        <?=form_open(base_url().'submit_usuario/editar_mobiliario','role="form"');
//aqui se procesará nuestro formulario, controlador comentarios, función insertar_comentarios
//creamos los arrays que compondran nuestro formulario
//primer array con el input que se llamará nombre y será donde introduciremos el mismo
   
    $codigo = array(
        'name' => 'codigo',
        'id' => 'codigo',
        'size' => '50',
        'class' => 'form-control',
        'value' => $p->codigo // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
    );
 
//el segundo array(campo email)
 
    $articulo = array(
        'name' => 'articulo',
        'id' => 'articulo',
        'size' => '50',
        'class' => 'form-control',
        'value' => $p->articulo 
    );
 
//el tercero...(campo asunto)
    $marca = array(
        'name' => 'marca',
        'id' => 'marca',
        'size' => '50',
        'class' => 'form-control',
        'value' => $p->marca
    );
 
 $descripcion = array(
        'name' => 'descripcion',
        'id' => 'descripcion',
        'size' => '100',
        'class' => 'form-control',
        'value' => $p->descripcion 
    );
    
    
$cantidad = array(
        'name' => 'cantidad',
        'id' => 'cantidad',
        'size' => '50',
        'class' => 'form-control',
        'value' => $p->cantidad
    );

    $opciones_pais = array(
                  'none' => '',
                  'Corp' => 'Corp',
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
        'value' => $p->pais
    );
    
 
//el botón submit de nuestro formulario
    $submit = array(
        'name' => 'submit',
        'class' => 'btn btn-primary',
        'id' => 'submit',
        'value' => 'Editar Mobiliario',
        'title' => 'Editar Mobiliario'
    );


    ?>
<?php
echo form_fieldset('');
?>
            
                
                    <div class="row">
                        <input type="hidden" name="hidden" value="<?= $p->id?>" />
                        <div class="col-md-6">
                        <label><?php echo form_label('Codigo: '); ?></label>
                        <?php echo form_input($codigo); ?>
                        <?php echo form_error('codigo'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Articulo: '); ?></label>
                        <?php echo form_input($articulo); ?>
                        <?php echo form_error('articulo'); ?>
                        </div>
                    </div>
                    
                     
                 
                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Marca: '); ?></label>
                        <?php echo form_input($marca); ?>
                        <?php echo form_error('marca'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Descripcion: '); ?></label>
                        <?php echo form_input($descripcion); ?>
                        <?php echo form_error('descripcion'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Cantidad: '); ?></label>
                        <?php echo form_input($cantidad); ?>
                        <?php echo form_error('cantidad'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Pais: '); ?></label>
                        <?php echo form_dropdown('pais', $opciones_pais, $p->pais, 'class="form-control" id="`pais"'); ?>
                        <p class="help-block"><?php echo form_error('pais'); ?></p>
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
               <? } ?>         <!-- /.panel-body -->
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
    <script src="<?=base_url()?>js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url()?>js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>js/sb-admin-2.js"></script>

</body>

</html>