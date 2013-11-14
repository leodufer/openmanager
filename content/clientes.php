<?php 
	include_once('lib/cliente.php');
	$cliente = new Cliente();
	$clientes = $cliente->obtener_todos();
 ?>
<div class="container">
	<h4>Clientes</h4>
	<a href="?p=formulario_nuevo_cliente" 
	class="btn btn-danger">
	<i class="icon-plus icon-white"></i></a>
	<table class="table table-hover">
		<thead>
			<th>#</th>
			<th>Nombre</th>
			<th>Documento</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Teléfono</th>
		</thead>
		<tbody>
			<?php foreach ($clientes as $cli): ?>
				<tr>
					<td><?=$cli["id"]?></td>
					<td><?=$cli["nombre"]?></td>
					<td><?=$cli["documento"]?></td>
					<td><?=$cli["direccion"]?></td>
					<td><?=$cli["email"]?></td>
					<td><?=$cli["telefono"]?></td>
					<td><a href="#"><i class="icon-edit"></i></a></td>
					<td><a href="#"><i class="icon-trash"></i></a></td>
				</tr>
			<?php endforeach ?>
		</tbody>

	</table>
</div>