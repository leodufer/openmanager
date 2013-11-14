<h4>Nueva Tarea</h4>

<form method="post" action="controlador/tarea.php">
<label>Descripción</label>
<textarea  type="text" name="descripcion" required placeholder="Descripcion de la tarea"></textarea>
<label>Duración</label>
<input type="number" min="1" name="duracion" required placeholder="Duración de la tarea">
<br>
<a href="?c=tareas" class="btn">Cancelar</a>
<input type="submit" value="Guardar" class="btn btn-danger">
</form>