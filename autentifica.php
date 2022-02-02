<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/estilo.css">
	<script type="text/javascript">
		function loginsuccessfull(){
			setTimeout("window.location='admin/lista.php'",5000);
		}
		function loginfailed(){
			setTimeout("window.location='login.php'",5000);
		}
	</script>
</head>
<body>
<?php 
	include("admin/conecta.php");
	//USUARIO E SENHA ADMIN
	$user = "flavio";
	$pass = "feijuca";

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
		
		if ($usuario == $user && $senha == $pass) {
			echo '<div id="echo">'."Autenticado com sucesso! Aguarde um instante.".'</div>'; 
			echo "<script>loginsuccessfull()</script>";
		}else{
			echo '<div id="echo">'."Nome de usuário ou senha inválidos! Aguarde um instante para tentar novamente.".'</div>';
			echo "<script>loginfailed()</script>";
		}
?>

</body>
</html>