<?php
#conecta ao BD
include('config.php');
#transforma as variaveis
$t = $_POST['titulo'];
$g = $_POST['genero'];
$ar = $_POST['artista'];
$al = $_POST['album'];
$l = $_POST['lancamento'];

$cadastro = mysqli_query($conexao,"insert into musicas (titulo,genero,artista,album,lancamento) values ('$t','$g','$ar','$al','$l')") or die("Erro ao cadastrar");
?>
<div class="msg1 padding20">MÚSICA ADICIONADA!</div>
