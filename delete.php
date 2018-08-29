<?php
	include('conecta.php');

	$excluir ="DELETE 
	             FROM $tabela 
	            WHERE id= $_GET[id]";
	mysql_query($excluir, $conexao1) or die("Ocorreu erro na exclusão!");
	 
	header("Location: select.php");

	
?>
