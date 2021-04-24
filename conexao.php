<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "form";


//Criar conexao

$conn = mysqli_connect ($servidor, $usuario, $senha, $dbname);

/* ou
$dbname = "form";
$conexao = ("localhost", "root","");
mysql_select db ($dbname, $conexao); */


