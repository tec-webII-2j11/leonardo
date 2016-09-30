<?php
    $conexao = mysql_connect("127.0.0.1","root","","formulario_bd");
    if (mysql_connect_errno()) {
        echo "Nao foi possivel conectar: " . mysql_connect_errno();
    }
?>