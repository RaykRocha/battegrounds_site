<?php 
	include("conecta.php");

	$recid = $_GET["idexc"];
	
	mysqli_query($conexao, "delete from noticia where id=$recid");

	header("location:lista.php");

?>
