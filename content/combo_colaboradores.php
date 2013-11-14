<?php 
	include_once('lib/colaborador.php');
	$colaborador = new Colaborador();
	$colaboradores = $colaborador->obtener_todos();
 ?>

 <select name="colaborador">
 	<?php foreach ($colaboradores as $col): ?>
 	 		<option value="<?=$col['id']?>"><?=$col['nombre'].' '.$col['apellido']?></option>
 	<?php endforeach ?>
 </select>