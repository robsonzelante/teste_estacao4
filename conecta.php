<?php
$server = "localhost";
$banco = "db_estacao4";
$usuario = "root";
$senha = "";
$tabela = "tb_produtos";
$conexao1 = mysql_connect($server, $usuario, $senha) or die("conex�o n�o estabelecida");
$conexao2 = mysql_select_db($banco, $conexao1) or die("Banco n�o encontrado");
?>