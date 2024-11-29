<?php

include_once("conexao.php");

$nome = $_POST ["nome"];
$email = $_POST ["email"];
$telefone = $_POST ["telefone"];
$mensagem = $_POST ["mensagem"];


$insere = "insert into formulario (nome, email, telefone, mensagem)
VALUES('$nome','$email','$telefone','$mensagem')";
$resultado = mysqli_query($conexao, $insere)
or die(mysqli_error());
echo "<script>alert('Enviado com sucesso!'); window.location.href = '../index.html';</script>";
exit;

?>