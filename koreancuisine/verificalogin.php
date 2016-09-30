<?php
	
	include "conectar.php";
	
    session_start();

	$usuario_formulario = $_POST["username"];
	$senha_formulario = $_POST["senha"];
	
	
	$query = "SELECT username, senha FROM usuario WHERE username=? AND senha=?";
	
	
	if($stmt = mysqli_prepare($conexao, $query)) {

	  
	  mysqli_stmt_bind_param($stmt, "ss", $usuario_formulario, $senha_formulario);

	  
	 mysqli_stmt_execute($stmt);


	  mysqli_stmt_bind_result($stmt, $usuario_bd, $senha_bd);

	
	  mysqli_stmt_fetch($stmt);
	  
	  if ($usuario_formulario == $usuario_bd  && $senha_formulario == $senha_bd) {

          $_SESSION['username'] = $usuario_formulario;
          $_SESSION['senha'] = $senha_formulario;
                
            if (isset($_SESSION['username'])&& isset($_SESSION['senha'])) {
                include "formulario_crud.php";     
			}
      }	  
	  else {
			echo "usuario ou senha incorretos";
	  }
		
	  
	  mysqli_stmt_close($stmt);
	} else
		echo "Falha no statment";

	
	mysqli_close($conexao);


?>		

