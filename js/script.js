function verifica(recid){
 	if(confirm("Tem certeza que deseja excluir?")){
 		window.location = "excluir.php?idexc=" +recid
 	}
}