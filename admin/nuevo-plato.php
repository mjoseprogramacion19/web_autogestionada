<!DOCTYPE html >
<html  lang="es">
<head>
	<title>Formulario</title>
	<meta  charset="utf-8" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>


<div class="container" >

<h1>Añadir Plato</h1>

<form  class= 'text-center' method='post' action='agregar-plato.php'>
  <div class="form-group">
    <label for="nombre_plato">Nombre del Plato</label>
    <input type="text" name="nombre_plato" class="form-control" id="nombre_plato" required placeholder="Nombre del Plato">
	</div>
	<div class="form-group">
    <label for="precio_plato">Precio Plato</label>
    <input type="text" name="precio" class="form-control" required value= 0.00 id="precio_plato" >
	<small>Poner precio sin palabra euros y con decimales con punto</small>
  </div>
  
  <p>Elige que orden tendrán en el menú</p>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" required name="orden_plato" id="primero" value="primeros">
  <label class="form-check-label" for="primero">Primero</label>
  </div>
	<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="orden_plato" id="segundo" value="segundos">
  <label class="form-check-label" for="segundo">Segundo</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="orden_plato" id="postre" value="postres">
  <label class="form-check-label" for="postre">Postre</label>
  </div>
 <fieldset>
  <div class="form-check mt-2">
  <input class="form-check-input" type="checkbox" value='1' checked name= "menu_activo" id="defaultCheck1">
  <label class="form-check-label" for="menu_activo">Activar dentro del menú</label>
  </div>
  </fieldset>
    <div class="" id=""><button type="submit" class="btn btn-outline-danger">Añadir Plato</button></div>
  
</form>



</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>