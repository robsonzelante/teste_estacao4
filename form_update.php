<?php
	include('conecta.php');
	$consulta = "SELECT id,nome,descricao,preco
	              FROM $tabela 
	             WHERE id = $_GET[id]
	           ";
	$resultado = mysql_query($consulta, $conexao1);
	$dado=mysql_fetch_object($resultado);
?>

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
						Alteração de Produtos
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<p></p>
					<form name="formUpdate" action="update.php" method="post">
					<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>"/>
					<div class="form-group">
						<label for="nome">Produto:</label>
						<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $dado->nome;?>" />
					</div>

					<div class="form-group">
						<label for="descricao">Descrição:</label>
						<textarea cols="20" rows="5" name="descricao" id="descricao" class="form-control" /><?php echo $dado->descricao;?></textarea>

					</div>

					<div class="form-group">
						<label for="preco">Preço:</label>
						<input type="text" name="preco" id="preco" class="form-control" value="<?php echo $dado->preco;?>" />
					</div>
										
					<input type="submit" value="Alterar" class="btn btn-success" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>