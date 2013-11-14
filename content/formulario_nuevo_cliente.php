<div class="container">
	<form action="controlador/cliente_control.php" method="post">
		<label>Nombre</label>
		<input name="nombre" type="text" required placeholder="Escriba el Nombre del Cliente">
		<label>CI / RUC</label>
		<input name="documento" type="text" required placeholder="Escriba el Nº de CI/RUC">
		<label>Dirección</label>
		<textarea name="direccion" type="text" required placeholder="Escriba la Dirección del Cliente"></textarea>
		<label>Email</label>
		<input name="email" type="email" placeholder="Escriba el Email">
		<label>Teléfono</label>
		<input name="telefono" type="text" required placeholder="Escriba el teléfono del Cliente">
		<br>
		<a href="?p=CLIENTES" class="btn">Cancelar</a>
		<input type="submit" value="Guardar" class="btn btn-danger">
	</form>
</div>