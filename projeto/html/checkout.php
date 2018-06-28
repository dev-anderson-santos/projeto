<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout Miror Fashion</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<style type="text/css">
		body {
			padding-top: 70px;
		}
		.navbar {
			margin: 0;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-id">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>				
			</button>
			<a class="navbar-brand" href="index.php">
				<img src="img/logo.png" class="img-fluid" alt="Mirror Fashion">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-id">
			<ul class="nav navbar-nav">
				<li class="active"><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
				<li><a href="#">Perguntas frequentes</a></li>
				<li><a href="#">Entre em contato</a></li>			
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<div class="container">
					<h1>Ótima escolha</h1>
					<p>
						Obrigado por comprar na Mirror Fashion!
						Preencha seus dados para efetivar a compra.
					</p>
				</div>
			</div>

			<div class="col-sm-4 col-lg-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h2 class="panel-title">Sua compra</h2>
					</div>
					<div class="panel-body">
						<img src="img/produtos/foto2-<?= $_POST['cor']?>.png" class="img-thumbnail img-responsive hidden-xs">
						<dl>
							<dt>Produto</dt>
							<dd><?= $_POST['nome'] ?></dd>

							<dt>Preço</dt>
							<dd><?= $_POST['preco'] ?></dd>		

							<dt>Cor</dt>
							<dd><?= $_POST['cor'] ?></dd>

							<dt>Tamanho</dt>
							<dd><?= $_POST['tamanho'] ?></dd>
						</dl>
					</div>
				</div> <!-- fim do .panel-success -->
			</div> <!-- fim da .col-sm-4 -->
			
			<form class="col-sm-8 col-lg-9">
				<div class="row">
					<fieldset class="col-md-6">
						<legend>Dados pessoais</legend>

						<div class="form-group">
							<label for="nome">Nome completo</label>
							<input type="text" class="form-control" id="nome" name="nome" autofocus required>
						</div>

						<div class="form-group">
							<label for="email">E-mail</label>
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
							</div>
						</div>

						<div class="form-group">
							<label for="cpf">CPF</label>
							<input type="text" class="form-control" id="cpf" name="cpf" required>
						</div>

						<div class="checkbox">
							<label>
							<input type="checkbox" value="sim" name="spam" checked>
							Quero receber spam da Mirror Fashion
							</label>
						</div>
					</fieldset>

					<fieldset class="col-md-6">
						<legend>Cartão de crédito</legend>

						<div class="form-group">
							<label for="numero-cartao">Número - CVV</label>
							<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
						</div>

						<div class="form-group">
							<label for="bandeira-cartao">Bandeira</label>
							<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
								<option value="master">MasterCard</option>
								<option value="visa">VISA</option>
								<option value="amex">American Express</option>
							</select>
						</div>

						<div class="form-group">
							<label for="validade-cartao">Validade</label>
							<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
						</div>
					</fieldset>
				</div>

				<button type="submit" class="btn btn-primary btn-lg pull-right">
					<span class="glyphicon glyphicon-thumbs-up"></span>
					Confirmar Pedido
				</button>
			</form>
		</div> <!-- fim da .row -->
	</div> <!-- fim do container geral -->
</body>
</html>