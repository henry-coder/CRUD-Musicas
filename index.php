<?php  
	include('config.php');
	$sql = "select * from musicas";
	$res = $conexao->query($sql);
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
		<title>Lista de Reprodução</title>
	</head>
	<body>
			<header id="main-banner">
				<center><table cellpadding="15px" cellspacing="15px" class="menu">
					<tr>
						<td class="main"><a href="adicionar.html">ADICIONAR MÚSICA</a></td>
						<td class="main"><a href="alterar.html">ALTERAR MÚSICA</a></td>
						<td class="main"><a href="remover.html">REMOVER MÚSICA</a></td>
					</tr>
				</table></center>
			</header>
			<center>
			<div id="main-area">
			  <table width="1098" border="1px" cellpadding="5px" cellspacing="5px" class="consulta">
			    <tr>
			      <th class="consult">Código</th>
			      <th class="consult">Título</th>
			      <th class="consult">Gênero</th>
			      <th class="consult">Artísta/Banda</th>
			      <th class="consult">Albúm</th>
			      <th class="consult">Lançamento</th>
		        </tr>
			    <?php while ($row = $res->fetch_assoc()) { ?>
			    <tr>
			      <td height="30" class="codigos"><?= $row["id"];?></td>
			      <td class="cons"><?= $row["titulo"];?></td>
			      <td class="cons"><?= $row["genero"];?></td>
			      <td class="cons"><?= $row["artista"];?></td>
			      <td class="cons"><?= $row["album"];?></td>
			      <td class="cons"><?= $row["lancamento"];?></td>
		        </tr>
			    <?php } ?>
		      </table>
			</div>
</div>
		</center>
	</body>
</html>