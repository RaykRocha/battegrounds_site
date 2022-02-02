<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Editar Produto </title>
	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="icon" href="../favicon.ico" type="image/x-icon" />

</head>

<body>
	<header class="cabecalho">
		<a href="../index.html">
			<div class="logo">Battlegrounds - FIAP</div>
		</a>
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
	
		<div id="lista">
			<div id="titulo">Editar Produto</div>
			<?php 
	include("conecta.php");
	$recid = $_GET["editaid"];
	$seleciona = mysqli_query($conexao, "select * from noticia where id=$recid");
	$campo = mysqli_fetch_array($seleciona);
?>

			<form method="POST" action="gravaedita.php" id="formulario" enctype="multipart/form-data">
				<input type="hidden" id="fid" name="fid" value="<?=$campo ["id"]?>">
						<label>ID:</label><input type="text" name="id" class="id" value="<?=$campo["id"]?>" required><br><br>
						<label>Titulo:</label><input type="text" name="titulo" class="titulo" value="<?=$campo["titulo"]?>" required><br><br>
						<label>Data:</label><input type="data"  name="data" class="data" value="<?=$campo["data"]?>" required><br><br>
						<br><label>Descrição:</label><textarea name="descricao" rows="5" cols="48" class="descricao" value="<?=$campo["descricao"]?>" required></textarea><br><br><br>
						<br><br><br><label>Imagem:</label><input name="imagem" id="imagem" type="file" class="imagem" value="<?=$campo["imagem"]?>"><br><br>
						<input type="submit" value="EDITAR NOTICIA"  name="submit" id="submit" >	
					</form>
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
