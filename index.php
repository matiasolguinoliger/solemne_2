<?php
	require './clases/conexion.php';
	$pdo = new conexion();
        $pdo->connectar();
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	//$sql = "SELECT * FROM personas $where";
	//$resultado=$pdo->query("SELECT * FROM personas $where")->fetchAll(PDO::FETCH_ASSOC);
        $resultado = $pdo->query("SELECT * FROM personas");
	
?>
<html lang="es">
	<head>
                <script type="text/javascript" src="js/codigoJsPrincipal.js"></script>
                <link rel="stylesheet" href="css/estilosCssPrincipal.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
                <link href="css/datatables.min.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
                <script src="js/datatables.min.js"></script>
                
                <script>
                    $(document).ready(function(){
                        $('#mitabla').DataTable({
                        
                        
                        });    
                    });
                </script>
	</head>
	
	<body>
		<div id="menu"> <?php include('vistas/menu.php');?> </div><!-- Menu lateral colapsable-->
                <div class="w3-main" style="margin-left:340px;margin-right:40px"><!--Stylo que crea un margen para que el menu no se superponga con el div contenido-->
                
                
	<div>	
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">Solemne 2</h2>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
				
				<!--<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>-->
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="display" id="mitabla">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Telefono</th>
							<th></th>
							<th></th>
                                                        <th>Imagen</th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch()) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['correo']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                                                                <td><?php 
							$path = "files/".$row['id'];
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
									echo "<img src='files/".$row['id']."/$archivo' width='100' height='30'/>";							
									}
								}
							}
							
						?></td>
                                                                
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		<div id="footer"> <?php include('vistas/footer.php'); ?> </div>
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>	