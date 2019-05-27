<!doctype html>
<html>
<head>
    
<?php include('./persistencia/head.php');
      require ('./clases/conexion.php');
?>
</head>

<body>
	
	<div id="menu"> <?php include('vistas/menu.php');?> </div><!-- Menu lateral colapsable-->
	<div class="w3-main" style="margin-left:340px;margin-right:40px"><!--Stylo que crea un margen para que el menu no se superponga con el div contenido-->
	<div id="contenido"> <?php include('./controlador/guardar.php'); ?> </div>
	<div id="footer"> <?php include('vistas/footer.php'); ?> </div>
	<div>	
</body>
</html>