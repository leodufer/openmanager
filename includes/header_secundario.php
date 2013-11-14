<?php 
	if(isset($_GET["p"])){
		$p = $_GET["p"];
	}else{
		$p = "index";
	}
	if(!file_exists('content/'.$p.'.php'))
			$p='404';
 ?>


<div class="container">
		
		<h3>OPEN MANAGER - CRM</h3>

		<ul class="nav nav-tabs">
			<li class="<?php if($p=='index') echo 'active';?>"><a href="?p=index">Inicio</a></li>
			<li class="<?php if($p=='clientes') echo 'active';?>"><a href="?p=clientes">Clientes</a></li>
			<li class="<?php if($p=='colaboradores') echo 'active';?>"><a href="?p=colaboradores">Colaboradores</a></li>
			<li class="<?php if($p=='visitas') echo 'active';?>"><a href="?p=visitas">Visitas Pendientes</a></li>
		</ul>
</div>