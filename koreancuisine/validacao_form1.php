<?php

$nomePessoa=$_POST["nomePessoa"]; 

$emailPessoa=$_POST["emailPessoa"];

$sexos=$_POST["sexos"];
$diaPessoa=$_POST["diaPessoa"];
$mesPessoa=$_POST["mesPessoa"];
$anoPessoa=$_POST["anoPessoa"];
$estado=$_POST["estado"];
$cidadePessoa=$_POST["cidadePessoa"];

$arquivo = $_FILES['ARQUIVO'];
$tamanho_maximo=$_POST['MAX_SIZE_FILE'];		
$tipos_aceitos = array("image/gif","image/png","image/bmp","image/jpeg");

            strip_tags($nomePessoa);
            
            strip_tags($emailPessoa);
            
            strip_tags($sexos);
            strip_tags($diaPessoa);
            strip_tags($mesPessoa);
            strip_tags($anoPessoa);
            strip_tags($estado);
            strip_tags($cidadePessoa);

$erro = FALSE;
if (empty($nomePessoa) or strlen($nomePessoa) < 5 ) {
    echo "ERRO! Favor digitar seu nome corretamente.<br/>";
    $erro=TRUE;
} else



if (strlen($emailPessoa) < 8 || -strstr($emailPessoa, '@')) {
    echo "ERRO! Favor digitar o seu e-mail corretamente.<br/>";
    $erro=TRUE;
} else

if (strlen($confirmaEmailPessoa) < 8 || -strstr($confirmaEmailPessoa, '@')) {
    echo "ERRO! Favor digitar a confirmação de e-mail corretamente.<br/>";
    $erro=TRUE;
} else


if (empty($sexos) or strstr($sexos, ' ')) {
    echo "ERRO! Favor digitar o sexo corretamente.<br/>";
    $erro=TRUE;
}

if (empty($diaPessoa)) {
    echo "ERRO! Favor digitar o dia corretamente.<br/>";
    $erro=TRUE;
}

if (empty($mesPessoa)) {
    echo "ERRO! Favor digitar o mês corretamente.<br/>";
    $erro=TRUE;
} else

if (empty($anoPessoa)) {
    echo "ERRO! Favor digitar o ano corretamente.<br/>";
    $erro=TRUE;
} else

if (empty($estado)) {
    echo "ERRO! Favor digitar o estado corretamente.<br/>";
    $erro=TRUE;
} else


if (empty($cidadePessoa)) {
    echo "ERRO! Favor digitar a cidade corretamente.<br/>";
    $erro=TRUE;
} else
    

    if($arquivo['error'] != 0) {
echo 'Erro no Upload do arquivo';
switch($arquivo['error']) {
case  UPLOAD_ERR_INI_SIZE:
echo 'O Arquivo excede o tamanho máximo permitido.';
break;
case UPLOAD_ERR_FORM_SIZE:
echo 'O Arquivo enviado é muito grande.';
break;
case  UPLOAD_ERR_PARTIAL:
echo 'O upload não foi completo.';
break;
case UPLOAD_ERR_NO_FILE:
echo 'Nenhum arquivo foi informado para upload.';	
break;
}
echo '</p>';
exit;
}
if($arquivo['size']==0 OR $arquivo['tmp_name']==NULL) {
echo '<p>Nenhum arquivo enviado.</p>';
exit;
}
if($arquivo['size']>$tamanho_maximo) {
echo '<p>Tamanho do arquivo excedido(Tamanho Máximo = ' . $tamanho_maximo . ' bytes).</p>';
exit;
}


if(array_search($arquivo['type'],$tipos_aceitos)===FALSE) {
echo '<p> O arquivo (' . $arquivo['type'] . ') não e permitido. Os tipos aceitos são:	</p>';
echo '<pre>';
print_r($tipos_aceitos);
echo '</pre>';
exit;
}
if (!file_exists('ARQUIVO')) 
{
mkdir('ARQUIVO', 0777, true);
}
$destino = 'ARQUIVO/' . $arquivo['name'];
if(move_uploaded_file($arquivo['tmp_name'],$destino)) {
/*echo '<p> Arquivo enviado para ' .$destino.'! </p>';
echo "<img src='$destino' border=0>"; */
}
else {
echo '<p>Erro durante o envio</p>';
} 

    
if ($erro==false) {
 echo "CORRETO! Todos os campos foram digitados corretamente. <br/>";  
    include "index.html";
}

?>