<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$desenv = filter_input(INPUT_POST, 'devweb', FILTER_SANITIZE_STRING);
$senioridade = filter_input(INPUT_POST, 'senioridade', FILTER_SANITIZE_STRING);
$tecno = filter_input(INPUT_POST, 'tecnologia', FILTER_SANITIZE_STRING);
$experie = filter_input(INPUT_POST, 'experiencia', FILTER_SANITIZE_STRING);

$result="INSERT INTO usuario (nome, sobrenome, email, desenv, senioridade, tecno, experie) VALUES ('$nome', '$sobrenome', '$email', '$desenv', '$senioridade', '$tecno', '$experie')";
$resultado = mysqli_query ($conn, $result);

if (mysqli_insert_id($conn)){
    header ("Location: form.html");
}else{
    header ("Location: form.html");
}
