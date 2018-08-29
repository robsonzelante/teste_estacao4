<?php
$server = "localhost";
$banco = "db_estacao4";
$usuario = "root";
$senha = "";
$tabela = "tb_produtos";
$conexao1 = mysql_connect($server, $usuario, $senha) or die("conexão não estabelecida");
$conexao2 = mysql_select_db($banco, $conexao1) or die("Banco não encontrado");
?>