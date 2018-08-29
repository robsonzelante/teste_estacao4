<?php
	include('conecta.php');
	 
	$alterar ="UPDATE 
		              $tabela 
		          SET   nome ='$_POST[nome]'
		              , descricao ='$_POST[descricao]'
		              , preco ='$_POST[preco]'
		        WHERE 
		              id = $_POST[id]
		      ";


	mysql_query($alterar, $conexao1) or die("Ocorreu erro na alteraчуo!");

	header("Location: select.php");

?>