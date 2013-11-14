<!DOCTYPE html>
<html>
<!--inyectar o incluir el contenido del head-->
<?php 
	include("includes/head.php");
 ?>
<body>
<?php 
	include("includes/header.php");
	include("includes/header_secundario.php");

?>
<div class="container">
<?php
	include("content/".$p.".php");
?>
</div>


</body>
</html>