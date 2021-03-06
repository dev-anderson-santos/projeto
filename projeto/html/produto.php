
	<?php 
		$cabecalho_title = "Produto da Mirror Fashion";
		print $cabecalho_css = 
			'<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="css/reset.css">
			<link rel="stylesheet" type="text/css" href="css/produto.css">';
			include "cabecalho.php"; 
	?>
	<div class="produto-back">	
		<div class="container">	
			<div class="produto">
				<h1>Fuzzy Cardigan</h1>
				<p>por apenas R$ 120,90</p>

				<form action="checkout.php" method="post">
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>
						
						<input type="hidden" name="nome" value="Fuzzy Cardigan">
						<input type="hidden" name="preco" value="120,90">

						<input type="radio" name="cor" value="verde" id="verde" checked="checked">
						<label for="verde">
							<img src="img/produtos/foto2-verde.png" alt="verde">
						</label>

						<input type="radio" name="cor" value="rosa" id="rosa" >
						<label for="rosa">
							<img src="img/produtos/foto2-rosa.png" alt="rosa">
						</label>

						<input type="radio" name="cor" value="azul" id="azul" >
						<label for="azul">
							<img src="img/produtos/foto2-azul.png" alt="azul">
						</label>
					</fieldset>

					<fieldset class="tamanho">
						<legend>Escolha o tamanho</legend>

						<input type="range" name="tamanho" id="tamanho" min="36" value="42" step="2">
					</fieldset>

					<input type="submit" class="comprar" value="Comprar">
				</form>
			</div> <!-- Fim da .produto -->
			<div class="detalhes">
				
				<h2>Detalhes do produto</h2>

				<p>
					Esse é o	melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidadede Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.
				</p>

				<table>
					<thead>
						<tr>
							<th>Característica</th>
							<th>Detalhe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <!-- Fim da .container -->
	</div>
	<?php include "rodape.php"; ?>
</body>
</html>