<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="css/reset.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>

		<?php
				include ('conecta.php');
				$nome = $_POST['nome'];
				$descricao = $_POST['descricao'];
				$preco = $_POST['preco'];
				$inserir = mysql_query("INSERT INTO $tabela (nome, descricao, preco) VALUES('$nome', '$descricao', '$preco')");
				header("Location: select.php");
		?>

	</head>
	<body>
			
	</body>
</html>