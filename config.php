<!DOCTYPE html>
<html lang="br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
<?php
# Conexão com o banco de dados
$conexao = mysqli_connect('localhost','root','') or die("Erro de conexão");
$banco = mysqli_select_db($conexao,'playlist') or die("Erro ao selecionar o banco de dados");
?>