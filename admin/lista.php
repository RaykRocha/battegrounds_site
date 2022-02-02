<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Listagem de Produtos</title>
	<script type="text/javascript" src="../js/script.js"></script>
	<link rel="stylesheet" href="../css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link rel="icon" href="../favicon.png">
</head>

<body>
	<header class="cabecalho">
		<a href="../index.html"><div class="logo">Battlegrounds - FIAP</div></a>
		<button class="btn-menu"><img src="../image/menu.png" class="iconMenu"></button>
		<nav class="menu">
			<a class="btn-close">X<i class="fa fa-times"></i></a>
			<ul>
				<li><a href="../index.html">HOME</a></li>
				<li><a href="lista.php">LISTA NOTÍCIA</a></li>
				<li><a href="cadastra.php">CADASTRAR NOTÍCIA</a></li>
			</ul>
		</nav>
	</header>
		<div class="content">
			<div class="lista">
				<div id="titulo">Lista de Notícias</div>
				<table width="100%" cellspacing="5" cellpadding="10" class="borda">
					<tr>
						<td><strong>Imagem </strong></td>
						<td><strong>Título </strong></td>
						<td><strong>Data </strong></td>
						<td><strong>Descrição</strong></td>
					</tr>
					<?php 
					include("conecta.php");
					$seleciona = mysqli_query($conexao, "select * from noticia order by id desc");
					while ($campo = mysqli_fetch_array($seleciona)) {?>
						<tr>
						<td>
							<?=$campo["imagem"]?>
						</td>
						<td>
							<?=$campo["titulo"]?>
						</td>
						<td>
							<?=$campo["data"]?>
						</td>
						<td>
							<?=$campo["descricao"]?>
						</td>
						<td align="center"><a id="editadeleta" href="editar.php?editaid=<?=$campo["id"]?>"> editar </a></td>
						<td align="center"><a id="editadeleta" href="#" onClick="verifica(<?=$campo ["id"]?>)"> excluir </a></td>

					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	
	<footer class="rodape">
		<p class="copyright">Battlegrounds - Iron Spider FIAP 2018. </p>
	</footer>
	<!-- JQUERY -->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script>
		$(".btn-menu").click(function(){
			$(".menu").show();
		});
		$(".btn-close").click(function(){
			$(".menu").hide();
		});
	</script>

</body>

</html>
