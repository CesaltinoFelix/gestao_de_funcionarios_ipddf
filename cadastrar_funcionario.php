<?php

$nomeArquivo = $_FILES["foto_funcionario"]["name"];

if(!is_dir("uploads")) {
    mkdir("uploads");
}
$destino = "uploads/" . $nomeArquivo;

if(move_uploaded_file($_FILES["foto_funcionario"]["tmp_name"], $destino)) {
    echo "Arquivo enviado com sucesso!";
} else {
    echo "Erro ao enviar o arquivo.";
}