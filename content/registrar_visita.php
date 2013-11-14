<?php 
	include_once('lib/cliente.php');
	$cliente = new Cliente();
	$cliente->id=$_GET['c'];
	$cliente->obtener();
?>

<h4>Registrar Visita para el Cliente: <span class="label label-important"><?php echo $cliente->nombre; ?></span></h4>
<form>
	<input type="hidden" value="<?php echo $cliente->id ?>" name="cliente">
	<label>Fecha de Visita</label>
	<input type="text" id="fecha" placeholder="Fecha de la Visita" name="fecha" required>
	<label>Observación</label>
	<textarea type="text" name="observacion" placeholder="Alguna Observacion" required></textarea>
	<label>Colaborador</label>
	<?php include('combo_colaboradores.php'); ?>
</form>