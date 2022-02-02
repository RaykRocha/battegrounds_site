<?php 
	include("admin/conecta.php");
	$result = "SELECT * FROM noticia ORDER BY id desc";
	$result_noticia = mysqli_query($conexao, $result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, initial-scale=1">
	<title>Battlegrounds - FIAP</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link rel="icon" href="favicon.png">
</head>
<body>
	<header class="cabecalho">
		<a href="index.html"><div class="logo">Battlegrounds - FIAP</div></a>
		<button class="btn-menu"><img src="image/menu.png" class="iconMenu"></button>
		<nav class="menu">
			<a class="btn-close">X<i class="fa fa-times"></i></a>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="midia.html">MÍDIA</a></li>
				<li><a href="noticia.php">NOTÍCIAS</a></li>
				<li><a href="sobre.html">SOBRE</a></li>
				<li><a href="game/game.html">JOGO</a></li>
			</ul>
		</nav>
	</header>
	<main class="servicos">
		<?php while ($noticia = mysqli_fetch_assoc($result_noticia)) { ?>
		<article class="servico" >
			<a href="#"><img src="admin/<?=$noticia["imagem"]?>"></a>
			<div class="inner">
				<a href="#"><?=$noticia["titulo"]?></a>
				<h4>
					<?=$noticia["data"]?></h4>
				<p><?=$noticia["descricao"]?></p>
			</div>
		</article>
		<?php } ?>
	</main>
	<!-- RODAPÉ -->
	<footer class="rodape">
		<a href="login.php" class="login">LOGIN</a>
		<p class="copyright">Battlegrounds - Iron Spider FIAP 2018. </p>
	</footer>
	<!-- JQUERY -->
	<script src="js/jquery-3.3.1.min.js"></script>
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