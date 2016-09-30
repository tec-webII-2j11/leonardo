<?php

if(isset($_REQUEST['Entrar'])){
	
$usename = $_REQUEST ['usename'];
$senha = $_REQUEST ['senha'];

echo $sql = "SELECT * FROM login WHERE username = '$username' AND senha = '$_senha' ";
$query = mysql_query ($sql) or die(mysql_error());
$qtda = mysql_num_rows ($query);
if (qtda == 0) {
	echo 'Erro ao Entrar';
}
else 
	
	$_SESSION['usename'] = $usename;
	$_SESSION['senha'] = $senha;
?>