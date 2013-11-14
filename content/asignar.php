<?php 
	include_once('lib/tarea.php');
	$tarea = new Tarea();
	$tareas = $tarea->obtener_tareas_nuevas();
 ?>
 <table class="table table-hover">
 	<thead>
 		<th>#</th>
 		<th>Descripción</th>
 		<th>Estado</th>
 		<th>Colaborador</th>
 	</thead>
 	<tbody>
 		<?php foreach ($tareas as $t): ?>
 			<tr>
 				<td><?php echo $t['id']?></td>
 				<td><?php echo $t['descripcion']?></td>
 				<td><?php echo $t['estado']?></td>
 				<td><form method="post" action="controlador/asignar.php">
 					<input type="hidden" value="<?php echo $t['id']?>" name="tarea">
 					<?php include('combo_colaboradores.php') ?>
 					<input type="submit" value="Asignar" class="btn btn-danger">
 				</form></td>
 			</tr>
 		<?php endforeach ?>
 	</tbody>
 </table>