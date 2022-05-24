<?php
include("class.Upload.php");

//define os tipos permitidos
$tipos[0]=".gif";
$tipos[1]=".jpg";
$tipos[2]=".jpeg";
$tipos[3]=".png";

if(isset($HTTP_POST_FILES["userfile"]))
{
$upArquivo = new Upload;
if($upArquivo->UploadArquivo($HTTP_POST_FILES["userfile"], "Imagens/", $tipos))
{
$nome = $upArquivo->nome;
$tipo = $upArquivo->tipo;
$tamanho = $upArquivo->tamanho;
}else{
echo "Falha no envio<br />";
}
}
?>
<strong>Nome do Arquivo Enviado:</strong> <?php echo $nome ?><br />
<strong>Tipo do Arquivo Enviado:</strong> <?php echo $tipo ?><br />
<strong>Tamanho do Arquivo Enviado:</strong> <?php echo $tamanho ?><br />
