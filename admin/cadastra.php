<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Cadastro de Produto </title>
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
			<div id="lista">
				<div id="titulo">Inserir notícia</div>
					<form method="POST" action="grava.php" id="formulario" enctype="multipart/form-data">
						<label>ID:</label><input type="text" name="id" class="id"><br><br>
						<label>Titulo:</label><input type="text" name="titulo" class="titulo" required><br><br>
						<label>Data:</label><input type="data"  name="data" class="data" required><br><br>
						<br><label>Descrição:</label><textarea name="descricao" rows="5" cols="48" class="descricao" required></textarea><br><br><br>
						<br><br><br><label>Imagem:</label><input name="imagem" id="imagem" type="file" class="imagem"><br><br>
						<input type="submit" value="INSERIR NOTICIA"  name="submit" id="submit" >	
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
