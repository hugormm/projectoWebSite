<?php

$dados = getHome();
$dados_livros = getLivros();
$books = [];
$i = 0;

if($dados["destaque_1"] != ""){
    $books[] = getIdLivro($dados["destaque_1"]);
}
if($dados["destaque_2"] != ""){
    $books[] = getIdLivro($dados["destaque_2"]);
}
if($dados["destaque_3"] != ""){
    $books[] = getIdLivro($dados["destaque_3"]);
}

require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/destaques_view.php");
require_once("_backoffice/componentes/footer.php");

?>