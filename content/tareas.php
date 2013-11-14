<?php 
	include_once('lib/tarea.php');
	$tarea = new Tarea();
	$tareas = $tarea->obtener_tareas();
 ?>
<h4>Tareas</h4>
<a href="?p=tareaformulario" class="btn btn-danger" title="Nueva Tarea">
	<i class="icon-plus icon-white"></i>
</a>
<table class="table table-hover">
	<thead>
		<th>#</th>
		<th>Descripción</th>
		<th>Duración</th>
		<th>Estado</th>
	</thead>
	<tbody>
		<?php foreach ($tareas as $t): ?>
			<tr>
				<td><?=$t['id']?></td>
				<td><?=$t['descripcion']?></td>
				<td><?=$t['duracion']?></td>
				<td><?=$t['estado']?></td>
				<td><a href="#"><i class="icon-edit"></i></a></td>
				<td><a href="#"><i class="icon-trash"></i></a></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>