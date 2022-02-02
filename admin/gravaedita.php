<?php 
	include("conecta.php");

	$codigo = $_REQUEST["fid"];
	$recid = $_REQUEST["id"];
	$rectitulo = $_REQUEST["titulo"];
	$recdata = $_REQUEST["data"];
	$recdescricao = $_REQUEST["descricao"];
	
	mysqli_query($conexao, "update noticia set id='$recid', titulo='$rectitulo', data='$recdata', descricao='$recdescricao' where id=$codigo");
	

	header("location:lista.php");

?>
