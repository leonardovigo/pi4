<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistema de Cadastros - Voluntários por amor</title>
    
</head>


<?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nomeempresa= $_POST ['nomeempresa'];
$cidadeempresa= $_POST ['cidadeempresa'];
$telefoneempresa= $_POST ['telefoneempresa'];
$emailempresa= $_POST ['emailempresa'];
$descricao= $_POST ['descricao'];


require 'conn.php';
 
 
$query1 = mysqli_num_rows(mysqli_query($link, "SELECT * FROM vagas WHERE emailempresa='$emailempresa'"));
    if($query1 == 1){
        echo "<script>alert('Esse cadastro já existe.'); history.back();</script>"; 
    }else{
        mysqli_query($link, "INSERT INTO vagas (nomeempresa, cidadeempresa, telefoneempresa, emailempresa, descricao) VALUES ('$nomeempresa', '$cidadeempresa', '$telefoneempresa', '$emailempresa', '$descricao')");
        echo "<script>alert('Vaga cadastrada com sucesso.');</script>";
        echo "<meta http-equiv='refresh' content='0, url=index.php'>";
    }
		
		
?> 

</html>
