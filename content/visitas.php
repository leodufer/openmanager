
<?php 
	include_once('lib/cliente.php');
	$cliente = new Cliente();
	$clientes = $cliente->obtener_clientes_con_visitas_pendientes(15);

	include_once('lib/colaborador.php');
	$colaborador = new Colaborador();

	include_once('lib/visita_colaborador.php');
	$visita_colaborador = new Visita_Colaborador();
 ?>
<div class="container">
	<h4>Visitas Pendientes</h4>
	<table class="table table-hover">
		<thead>
			<th>#</th>
			<th>Nombre</th>
			<th>Documento</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Teléfono</th>
			<th>Fecha Última Visita</th>
			<th>Visitado Por</th>
			<th>Días Atras</th>
			<th>Observación</th>
		</thead>
		<tbody>
			<?php foreach ($clientes as $cli): ?>
				<tr>
					<td><?=$cli["cliente"]?></td>
					<?php 
						$cliente->id=$cli['cliente'];
						$cliente->obtener();
					 ?>
					<td><?=$cliente->nombre?></td>
					<td><?=$cliente->documento?></td>
					<td><?=$cliente->direccion?></td>
					<td><?=$cliente->email?></td>
					<td><?=$cliente->telefono?></td>
					<td><?=$cli["max(fecha)"]?></td>

					<?php 
						$visita_colaborador->visita = $cli['visita'];
						$visita_colaborador->obtener_por_visita();
						$colaborador->id = $visita_colaborador->colaborador;
						$colaborador->obtener();
					 ?>
					
					<td><?=$colaborador->nombre.' '.$colaborador->apellido?></td>
					<td><?=$cli["tiempo"]?></td>
					<td><?=$visita_colaborador->observacion?></td>
					<td><a href="?p=registrar_visita&c=<?php echo $cli["cliente"]?>" title="Registrar visita" class="btn btn-danger"><i class="icon-plus icon-white"></i></a></td>
				</tr>
			<?php endforeach ?>
		</tbody>

	</table>
</div>
