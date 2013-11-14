<?php 
	include_once('lib/cliente.php');
	$cliente = new Cliente();
	$cliente->id = $_GET['id'];
	$cliente->obtener();
 ?>
<div class="container">
	<form action="controlador/cliente_control.php" method="post">
		<label>Nombre</label>
		<input name="nombre" type="text" required placeholder="Escriba el Nombre del Cliente" value="<?=$cliente->nombre?>">
		<label>Apellido</label>
		<input name="apellido" type="text" required placeholder="Escriba el Apellido del Cliente" value="<?=$cliente->apellido?>">
		<label>Documento</label>
		<input name="documento" type="text" required placeholder="Escriba el Nº de Documento" value="<?=$cliente->documento?>">
		<label>Dirección</label>
		<textarea name="direccion" type="text" required placeholder="Escriba la Dirección del Cliente"><?=$cliente->direccion?></textarea>
		<label>Email</label>
		<input name="email" type="email" placeholder="Escriba el Email" required value="<?=$cliente->email?>">
		<input name="id" type="hidden" value="<?=$cliente->id?>">
		<br>
		<a href="?p=CLIENTES" class="btn">Cancelar</a>
		<input type="submit" value="Guardar" class="btn btn-danger">
	</form>
</div>