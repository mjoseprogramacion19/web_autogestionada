<?php
// función par conectarnos con la base de datos
$host='localhost';
$usuario='root';
$clave = '';
$base ='webautogestionada';
$conex = mysqli_connect($host,$usuario,$clave, $base) or die('No se ha podido conectar con la base de datos');
//ponemos datos utf-8
mysqli_set_charset($conex,"utf8");
//preparamos las órdenes
$sql1="SELECT * FROM  platos WHERE orden_plato = 'primeros' AND menu_activo = 1";
$sql2="SELECT * FROM  platos WHERE orden_plato = 'segundos' AND menu_activo = 1";
$sql3="SELECT * FROM  platos WHERE orden_plato = 'postres' AND menu_activo = 1";
//ejecutamos las consultas
$consulta1 = mysqli_query($conex, $sql1);
$consulta2 = mysqli_query($conex, $sql2);
$consulta3 = mysqli_query($conex, $sql3);
?>