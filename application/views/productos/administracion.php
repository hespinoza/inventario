<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Administracion Productos - Sourcezilla</title>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
#logo{
	display: inline-block;
}
#texto{
	display: inline-block;
	text-align: right;
}

</style>
</head>
<body>
	<div>
		<div id="logo">
	<a class="navbar-brand" href="<?=base_url()?>"><img src="http://blog.comparaonline.cl/wp-content/themes/blog-servicios/images/layout/comparaonline_logo.png" width="165" height="40" ></a>
	</div>
	<div id="texto">
		<h2>&nbsp; &nbsp; Inventario</h2>
	</div>

	</div>
	
    <div>
		<?php echo $output; ?>
    </div>
   
</body>
</html>
