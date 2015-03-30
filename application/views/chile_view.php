<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventario Comparaonline - Chile</title>

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
                    <a class="btn btn-default" href="<?=base_url().'mobiliario'?>">Mobiliario</a>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?=base_url()?>"><i class="fa fa-edit fa-fw"></i> Todos</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'chile'?>"><i class="fa fa-edit fa-fw"></i> Chile</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'brasil'?>"><i class="fa fa-edit fa-fw"></i> Brasil</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'colombia'?>"><i class="fa fa-edit fa-fw"></i> Colombia</a>
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
                    <h1 class="page-header">Productos Chile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div id="izquierda">Lista de Productos</div>
                            <div id="derecha" "with_print">
                                <a class="btn btn-default btn-xs" href="chile/excel"><i class="fa fa-file-excel-o"></i></a>
                                <a class="btn btn-default btn-xs" onclick="window.print()"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                             
                                <th><center>Codigo</center></th>
                                <th><center>Nombre</center></th>
                                <th><center>Marca</center></th>
                                <th><center>Modelo</center></th>
                                <th><center>Tipo</center></th>
                                <th><center>Estado</center></th>
                                <th><center>Usuario</center></th>
                                <th><center>Departamento</center></th>
                                <th><center>Pais</center></th>
                             
                            </tr>
                                    </thead>
                                    <tbody>
                        <?php foreach ($productos as $p):?>
 
                            <tr>

                                <td><?=$p->codigo?></td>
                                <td><?=$p->nombre?></td>
                                <td><?=$p->marca?></td>
                                <td><?=$p->producto?></td>
                                <td><?=$p->tipo?></td>
                                <td><?=$p->estado?></td>
                                <td><?=$p->usuario?></td>
                                <td><?=$p->departamento?></td>
                                <td><?=$p->pais?></td>
                             </tr>
 
                        <?php endforeach;?>
                    </tbody>
                                </table>
                            </div>
                            <div class="row-fluid">
                        <hr>
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