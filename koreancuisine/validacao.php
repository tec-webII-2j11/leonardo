<?php
			
            $nomePessoa=$_POST['nomePessoa'];
           
 			$emailPessoa=$_POST['emailPessoa'];
            
			$sexos=$_POST['sexos'];
			$diaPessoa=$_POST['diaPessoa'];
			$mesPessoa=$_POST['mesPessoa'];
			$anoPessoa=$_POST['anoPessoa'];
			$estado=$_POST['estado'];
            $cidadePessoa=$_POST['cidadePessoa'];
            $arquivo = $_POST['ARQUIVO'];
			$destino = $_POST['destino'];
            

            strip_tags($nomePessoa);
            
            strip_tags($emailPessoa);
            
            strip_tags($sexos);
            strip_tags($diaPessoa);
            strip_tags($mesPessoa);
            strip_tags($anoPessoa);
            strip_tags($estado);
            strip_tags($cidadePessoa);

?>  

<?php

$username=$_POST['username'];
$senha=md5($_POST['senha']);

$regulamento=$_POST['regulamento'];

strip_tags($username);
strip_tags($senha);

strip_tags($regulamento);


$erro = FALSE;

if($regulamento == null) {
    echo "ERRO! Você deve aceitar o regulamento.<br/>";
    $erro=TRUE;
} else 

if ($erro==false) {
    echo "CORRETO! Todos os campos foram digitados corretamente. <br/>";
    /*echo "Username: " . $username .
        "<br>Senha: " . $senha .
        "<br>Confirmação Senha: " . $confirmacaoSenha .
        "<br>Confirma com o regulamento? " . $regulamento;*/
}

?>

<!DOCTYPE html>
<html>
    <head> 
        <title> Recebe Dados PHP </title>
    </head>
    <body>
        <?php echo $mensagem="" ?>
    </body>
</html>


<?php

    $conexao = mysql_connect ("127.0.0.1:c9","root","","formulario_bd");
        if (mysqli_connect_errno()){
            echo "Não foi possível conectar: " . mysqli_connect_error();
        }
        echo "<br> Começando o INSERT!<br>";
    $resultado = mysql_query($conexao, "INSERT INTO usuario VALUES ('$nomePessoa', '$emailPessoa', '$sexos', '$diaPessoa', '$mesPessoa', '$anoPessoa', '$estado', '$cidadePessoa', '$username', '$senha', '$regulamento')")
    or die ("Não foi possível acessar a tabela: " . mysql_error($conexao));
    
    echo "<br>Terminando o INSERT!<br>";
    echo "<br>Coloca o INSERT no banco!<br>";
    if($resultado){
    
        while($row = mysql_fetch_array($resultado)){
        echo "nomePessoa: ".$row["nomePessoa"].
             
             "emailPessoa: ".$row["emailPessoa"].
             
             "sexos: ".$row["sexos"].  
             "diaPessoa: ".$row["diaPessoa"].   
             "mesPessoa: ".$row["mesPessoa"]. 
             "anoPessoa: ".$row["anoPessoa"].   
             "estado: ".$row["estado"]. 
             "cidadePessoa: ".$row["cidadePessoa"].
			 "arquivo: ".$row["ARQUIVO"]. 
             "username: ".$row["username"]. 
             "senha: ".$row["senha"].
             
             "regulamento: ".$row["regulamento"]           
            ;
        }

    }
        echo "<br>Termina de colocar o INSERT no banco!<br>";
    mysqli_close($conexao);
?>


<?php

    $conexao = mysql_connect ("127.0.0.1","root","","formulario_bd");
        if (mysqli_connect_errno()){
            echo "Não foi possível conectar: " . mysqli_connect_error();
        }
    echo "<br>Começando o SELECT!<br>";
    $resultado = mysql_query($conexao, "SELECT * FROM usuario WHERE cpfPessoa = '11122233344'") or die ("Não foi possível acessar a tabela: " . mysqli_error($conexao));
    echo "<br>Terminando o SELECT!<br>";
    if($resultado){
    echo "<br>Faz o SELECT no banco!<br>";
        while($row = mysql_fetch_array($resultado)){
        echo "Nome: ".$row["nomePessoa"]. "  " .
             
             "E-mail: ".$row["emailPessoa"]. "  " .
             
             "sexos: ".$row["sexos"].   "  " .
             "Dia: ".$row["diaPessoa"].  "  " .
             "Mes: ".$row["mesPessoa"].  "  " .
             "Ano: ".$row["anoPessoa"].  "  " .
             "Estado: ".$row["estado"]. "  " . 
             "Cidade: ".$row["cidadePessoa"]. "  " .
             "Foto: ".$row["ARQUIVO"]. "  " .
             "Username: ".$row["username"]. "  " . 
             "Senha: ".$row["senha"]. "  " .
             
             "Regulamento: ".$row["regulamento"] ."<br>"        
            ;
        }
    }
    echo "<br>Termina de fazer o SELECT no banco!<br>";

    mysqli_close($conexao);
?>
