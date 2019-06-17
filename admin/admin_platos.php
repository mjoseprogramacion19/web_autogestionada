<!DOCTYPE html >
<html  lang="es">
<head>
	<title>Tabla</title>
	<meta  charset="utf-8" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<?php include 'datos_admin.php';
include '../includes/functions.php';
include 'nav-admin.php';
?>

<div class="container" >

<h1>Administrar platos</h1>

<a href='nuevo-plato.php' class='btn btn-primary mb-2'>Añadir Plato</a>
<table class="table table-striped  table-dark">
 
	<tr>
		<th>ID</th>
		<th>Nombre Plato</th>
		<th>Orden Plato</th>
		<th>Precio</th>
		<th>Activo</th>
		<th>Modificar</th>
		<th>Borrar</th>
	</tr>
	<?php
while($fila = mysqli_fetch_array($consulta)) {
	echo'<tr>';
	echo'<td>'.$fila['id'].'</td>';
	echo'<td>'.$fila['nombre_plato'].'</td>';
	echo'<td>'.$fila['orden_plato'].'</td>';
	echo'<td>'.$fila['precio'].' €</td>';
	if($fila['menu_activo']){
		echo '<td class="btn btn-outline-success"> Si</td>';
	}else{
		echo '<td class="btn btn-outline-secondary"> No</td>';
	}
	//echo'<td>'.$fila['menu_activo'].'</td>';
	echo'<td><button class="btn btn-warning">Modificar</button></td>';
	echo'<td><button class="btn btn-danger">Borrar</button></td>';
	echo'</tr>';
}
//mysqli_close('$conex');

?>
</table>




</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>