<?php
    $conexao = mysqli_connect("127.0.0.1:3308","root","","formulario_bd");
    if (mysqli_connect_errno()) {
        echo "Nao foi possivel conectar: " . mysqli_connect_errno();
    }
?>