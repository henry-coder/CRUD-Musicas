<?php
#conecta ao BD
include('config.php');
#transforma as variaveis
$id = $_POST['codigo'];

$cadastro = mysqli_query($conexao,"delete from musicas where id=$id") or die("Erro ao excluir");
?>
<div class="msg1 padding20">MÚSICA REMOVIDA!</div>