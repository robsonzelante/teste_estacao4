<?php
	include('conecta.php');

	$excluir ="DELETE 
	             FROM $tabela 
	            WHERE id= $_GET[id]";
	mysql_query($excluir, $conexao1) or die("Ocorreu erro na exclus�o!");
	 
	header("Location: select.php");

	
?>
