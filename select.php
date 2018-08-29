<html>
	<head>
		<title></title>
		<link href="css/reset.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div class="container">
				<div class="row">
  					<div class="col-md-12">
  						<div class="productTitle">
  							Lista de Produtos
  						</div>
  					</div>
  				</div>

  				<div class="row">
  					<div class="col-md-12">
  						<p></p>
					<?php
						include('conecta.php');
						$query = "SELECT id,nome,descricao,preco FROM $tabela ORDER BY nome asc";
						$resultado = mysql_query($query,$conexao1);
						echo "<table class='table'>";
						echo "<tr>
						<th> Id </th>
						<th> Produto </th>
						<th> Descrição</th>
						<th> Preço</th>
						</tr>";
						while ($dado = mysql_fetch_object($resultado)) {
							echo "<tr>
							<td>" . $dado->id . "</td>
							<td>" . $dado->nome . "</td>
							<td>" . $dado->descricao . "</td>
							<td>" . $dado->preco . "</td>
							<td> <a href=form_update.php?id=$dado->id>Alterar</a></td>
							<td> <a href=delete.php?id=$dado->id>excluir</a></td></tr>";
						}
						echo "</table>";
						echo "<br /><br /><a href='index.php'>Novo cadastro</a>";
					?>
				</div>
	</body>
</html>