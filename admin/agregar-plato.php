<?php

include 'header.php';


?>
<div class="container" id=""><?php
//recogemos los datos validandolos con isset
if(isset($_POST['nombre_plato'], $_POST['precio'], $_POST['orden_plato'], $_POST['menu_activo'])){
	//los datos recogidos los asociamos a una variable de manejo
	
$nombre_plato = $_POST['nombre_plato'];
$precio = $_POST['precio'];
$orden_plato = $_POST['orden_plato'];

$menu_activo = $_POST['menu_activo'];
  // abrimos conexion y ejecutamos la consulta
 include '../includes/conexiondb.php';
 //preparamaos la orden sql
 $sql = "INSERT INTO platos(id, nombre_plato, precio, orden_plato, menu_activo) VALUES ('0', '$nombre_plato', '$precio', '$orden_plato', '$menu_activo')";
 //ejecutamos la consulta
 if(mysqli_query($conex, $sql)){
	 echo 'Plato añadido. Volver al <a class="btn btn-success"  href="nuevo-plato.php">Formulario</a>';
 }else{
	 'Plato no añadido.Volver al <a class="btn btn-success"  href="nuevo-plato.php">Formulario</a>';
 }
 
}else{
	echo 'Rellene bien el <a class="btn btn-success"  href="nuevo-plato.php">Formulario</a>';
}
?></div>
<?php

include 'footer.php';


?>