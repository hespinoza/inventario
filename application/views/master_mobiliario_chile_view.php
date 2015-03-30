<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventario Comparaonline - Todos</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
<script>
    function ConfirmarBorrado()
    {
        if (confirm("¿Seguro que quieres eliminar este registro?"))
        {     
            return true;      
        }     
        else  
        {     
            return false;     
        }
    }
</script>
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
                        <li><a><i class="fa fa-user fa-fw"></i> <?=$this->session->userdata('username')?></a>
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
                    <h1 class="page-header">Mobiliario Chile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div id="izquierda">Lista de Muebles</div>
                            <div id="derecha" "with_print"><button class="fa fa-file-excel-o" onclick=""></button> <button class="fa fa-print" onclick="window.print()"></button></div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                             
                                <th><center>Codigo</center></th>
                                <th><center>Articulo</center></th>
                                <th><center>Marca</center></th>
                                <th><center>Descripcion</center></th>
                                <th><center>Cantidad</center></th>
                                <th><center>Pais</center></th>
                                <th><center>Opciones</center></th>
                             
                            </tr>
                                    </thead>
                                    <tbody>
                        <?php foreach ($muebles as $m):?>
 
                            <tr>

                                <td><?=$m->codigo?></td>
                                <td><?=$m->articulo?></td>
                                <td><?=$m->marca?></td>
                                <td><?=$m->descripcion?></td>
                                <td><?=$m->cantidad?></td>
                                <td><?=$m->pais?></td>
                                <td>
                                    <div id="botones">
                                    <form action="editar_registro/muebles" method="post">
                                        <input type="hidden" name="username" value="<?=$m->id?>" />
                                        <button name="button" type="submit" id="button" value="true" class="btn btn-primary btn-circle" ><i class="fa fa-edit"></i></button>
                                    </form>
                                    </div>
                                    <div id="botones">
                                    <form action="eliminar_registro/muebles" name="eliminar"method="post">
                                        <input type="hidden" name="username" value="<?=$m->id?>" />
                                        <button name="button" onclick="return ConfirmarBorrado()" type="submit" id="button" value="true" class="btn btn-danger btn-circle" ><i class="fa fa-times"></i></button>
                                    </form>
                                    </div>
                                </td>
                             </tr>
 
                        <?php endforeach;?>
                    </tbody>
                                </table>
                            </div>
                            <div class="row-fluid">
                        <hr>
                    </div> 
                           
<div class="col-md-4 col-md-offset-10">
    <a href="crear_usuario/mobiliario" class="btn btn-outline btn-primary" role="button">Agregar Mobiliario
    </a>
  </div>
                            <!-- /.table-responsive -->
                            <div class="col-md-4 col-md-offset-10">
    
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script>

     <!-- Script del data table -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>