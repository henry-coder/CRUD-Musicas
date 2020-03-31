<?php
#conecta ao BD
include('config.php');
#transforma as variaveis
$id = $_POST['codigo'];
$t = $_POST['titulo'];
$g = $_POST['genero'];
$ar = $_POST['artista'];
$al = $_POST['album'];
$l = $_POST['lancamento'];

$alteracao = mysqli_query($conexao,"update musicas set titulo='$t', genero='$g', artista='$ar', album='$al', lancamento='$l' where id=$id") or die("Erro ao alterar");
?>
<div class="msg1 padding20">MÚSICA ALTERADA!</div>