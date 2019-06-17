<?php
include '../includes/conexiondb.php';
//preparamos las ordenes
$sql="SELECT * FROM platos ORDER BY orden_plato" ;
//ejecutamos las consultas
$consulta = mysqli_query($conex, $sql);
?>