<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>LOGIN ADMINISTRATIVO</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link rel="icon" href="favicon.png">
</head>

<body>
	<header class="cabecalho">
		<a href="index.html">
			<div class="logo">Battlegrounds - FIAP</div>
		</a>
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
	<div class="content">
		<div id="titulo">
			<p>Área restrita</p>
		</div>
		<div class="acesso">
			<form method="POST" action="autentifica.php" name="login" id="login">
				<label id="login">USUÁRIO:</label><input type="text" name="usuario" class="usuario" required><br>
				<label id="login">SENHA:</label><input type="password" name="senha" class="senha" required><br>
				<input type="submit" name="submit" id="submit" value="ENTRAR">
			</form>
		</div>
	</div>
	<footer class="rodape">
		<p class="copyright">Battlegrounds - Iron Spider FIAP 2018. </p>
	</footer>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script>
		$(".btn-menu").click(function() {
			$(".menu").show();
		});
		$(".btn-close").click(function() {
			$(".menu").hide();
		});

	</script>

</body>

</html>
