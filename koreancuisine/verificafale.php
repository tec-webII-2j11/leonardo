<?php 
	include 'conectar.php';

$nome=$_POST["nome"]; 
$email=$_POST["email"];
$mensagem=$_POST["mensagem"];

            strip_tags($txtNome);
            strip_tags($txtEmail);
            strip_tags($txtArea);

$erro = FALSE;
if ( empty($nome) or strlen($nome) < 5 ) {
    echo "ERRO! Favor digitar seu nome corretamente.<br/>";
    $erro=TRUE;
} else

if (strlen($email) < 8 || -strstr($email, '@')) {
    echo "ERRO! Favor digitar o seu e-mail corretamente.<br/>";
    $erro=TRUE;
} else
    
if (strlen($mensagem) < 0) {
    echo "ERRO! Favor escrever sua mensagem.<br/>";
    $erro=TRUE;
} else
    if ($erro==FALSE) {
 /*   echo "CORRETO! Todos os campos foram digitados corretamente. <br/>";   */
    $resultado = mysqli_query($conexao, "INSERT INTO contato(
	nome_contato,
	email_contato,
    mensagem_contato) VALUES (
	'".$nome."',
	'".$email."',
	'".$area."'
	)") or die ("Nao foi possivel executar a SQL:".mysqli_error($conexao));

    if($resultado === TRUE){
        echo "<br/>Usuario inserido com sucesso.";
    } else {
        echo "<br/>Erro ao inserir usuario.";
    }

 
    mysqli_close($conexao);
}


?>