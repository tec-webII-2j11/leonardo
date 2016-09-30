<?php
mysql_connect("c9", "lkoralcow", "123");
mysql_select_db("c9");
 
// Recuperando os dados do formulário
$LoginUsuario = $_POST["LoginUsuario"];
$SenhaUsuario = $_POST["SenhaUsuario"];
 
// Incluimos a classe
include("login.html");
 
/* 
Instanciamos a classe. A função Login(), aceita como parametros facultativos: 
nome da tabela, nome do campo de login, nome do campo de senha, mensagem de erro.
Por padrão, o nome da tabela é "usuarios", o campo de login é "login", o de senha é "senha"
e a mensagem de erro é "Login ou senha inválido".
*/
$login = new Login();
 
/* 
Realizamos o login através da função logar() da classe, 
que aceita como parametro obrigatório: o login e a senha. 
E como terceiro parametro: página que o usuário será redirecionado. 
Ou seja: logar(login, senha, redirecionamento)
*/
$logar = $login->logar($LoginUsuario, $SenhaUsuario, "area_restrita.php");
 
// Se o login ou senha estiver incorreto, exibe mensagem de erro
if ($logar)
	echo $logar;
?>
3. 

$conexao = mysql_connect ("host", "user", "pass");
mysql_select_db ("db_name");

$email = $_POST["email"];

$query = "INSERT INTO cadastro (email) VALUES ('".$email."')";

$inserir = mysql_query($query);

if ($inserir) {
echo "E-mail cadastrado com sucesso!";
} else {
echo "Ocorreu um erro.";
echo "Dados sobre o erro:" . mysql_error();
}