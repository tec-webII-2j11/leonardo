<?php

    include "conectar.php";

	$nomePessoa=$_POST['nomePessoa'];
    
 	$emailPessoa=$_POST['emailPessoa'];
    
	$sexos=$_POST['sexos'];
	$diaPessoa=$_POST['diaPessoa'];
	$mesPessoa=$_POST['mesPessoa'];
	$anoPessoa=$_POST['anoPessoa'];
	$estado=$_POST['estado'];
    $cidadePessoa=$_POST['cidadePessoa'];
    $ARQUIVO = $_POST['ARQUIVO'];
	$username=$_POST["username"];
	$senha=$_POST["senha"];
	
	$regulamento=$_POST['regulamento'];
    
    $resultado = mysqli_query($conexao, "INSERT INTO usuario(
	nomePessoa,
	cpfPessoa,
	emailPessoa,
	confirmaEmailPessoa,
	sexos,
	diaPessoa,
	mesPessoa,
	anoPessoa,
	estado,
	cidadePessoa,
	ARQUIVO,
	username,
	senha,
	confirmacaoSenha,
	regulamento) VALUES (
	'".$nomePessoa."',
	
	'".$emailPessoa."',
	
	'".$sexos."',
	'".$diaPessoa."',
	'".$mesPessoa."',
	'".$anoPessoa."',
	'".$estado."',
	'".$cidadePessoa."',
	'".$ARQUIVO."',
	'".$username."',
	'".$senha."',
	
	'".$regulamento."'
	)") or die ("Nao foi possivel executar a SQL:".mysqli_error($conexao));

    if($resultado === TRUE){
        echo "<br/>Usuario inserido com sucesso.";
    } else {
        echo "<br/>Erro ao inserir usuario.";
    }

 
    mysqli_close($conexao);
?>