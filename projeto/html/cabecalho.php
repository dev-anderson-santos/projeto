<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php 			
			print $cabecalho_title;
		?>			
	</title>
	<?php print @$cabecalho_css; ?>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	
	
</head>
<body>
	<header class="container">		
		<h1>
			<a href="index.php">
				<img src="img/logo.png" alt="Mirror	Fashion">
			</a>
		</h1>
		
		<p class="sacola">
			Nenhum item na sacola de compras.
		</p>
		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua Contar</a></li>
				<li><a href="#">Lista de desejos</a></li>
				<li><a href="#">Cartão Fidelidade</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>				
			</ul>
		</nav>
	</header>
