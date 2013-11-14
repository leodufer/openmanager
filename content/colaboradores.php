<?php 
	include_once('lib/colaborador.php');
	$colaborador = new Colaborador();
	$colaboradores = $colaborador->obtener_todos();
 ?>
<h4>Colaboradores</h4>
<a href="?p=colaboradorformulario" class="btn btn-danger" title="Nuevo Colaborador">
	<i class="icon-plus icon-white"></i>
</a>
<table class="table table-hover">
	<thead>
		<th>#</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Email</th>
		<th>Teléfono</th>
	</thead>
	<tbody>
		<?php foreach ($colaboradores as $col): ?>
			<tr>
				<td><?=$col['id']?></td>
				<td><?=$col['nombre']?></td>
				<td><?=$col['apellido']?></td>
				<td><?=$col['email']?></td>
				<td><?=$col['telefono']?></td>
				<td><a href="#"><i class="icon-edit"></i></a></td>
				<td><a href="#"><i class="icon-trash"></i></a></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>