<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		 <title>Directorio Comparaonline - Inicio de Sesión</title>
		 <link rel="shortcut icon" href="http://www.comparaonline.cl/assets/favicon-9ffeae5a10a5c86a081d5208da7c9566.ico">
	</head>
	<body>
	<?php
	$username = array('name' => 'username');
	$password = array('name' => 'password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	?>
	<div class="container">
        <div class="row">
        		<div class="col-md-4 col-md-offset-4" id="login">
			<div class="login-panel panel panel-default" id="formulario_login">
            <div class="panel-heading">
                        <h3 class="panel-title">Iniciar Sesi&oacute;n</h3>
                    </div>
				<div class="panel-body" id="campos_login">
					<?=form_open(base_url().'login/new_user','role="form"')?>
					<fieldset>
                    <label for="username">Usuario:</label>
					<?=form_input($username,'','class="form-control"')?><p><?=form_error('username')?></p>
					<label for="password">Contrase&ntilde;a:</label>
					<?=form_password($password,'','class="form-control"')?><p><?=form_error('password')?></p>
					<?=form_hidden('token',$token)?>
					<?=form_submit($submit,'','class="btn btn-lg btn-primary btn-block"')?>
					</fieldset>
                    <?=form_close()?>
					<?php 
					if($this->session->flashdata('usuario_incorrecto'))
					{
					?>
					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
					<?php
					}
					?>
				</div>
                </div>
                <a href="<?=base_url()?>">Volver al Inventario</a>
			</div>

		</div>
        </div>
	
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