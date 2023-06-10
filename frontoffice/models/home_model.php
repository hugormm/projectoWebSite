<?php

$dados = getHome();
$dados_autor = getAutor();
$books = [];
$i = 0;

if($dados["destaque_1"] != 0){
    $books[] = getIdLivro($dados["destaque_1"]);
}
if($dados["destaque_2"] != 0){
    $books[] = getIdLivro($dados["destaque_2"]);
}
if($dados["destaque_3"] != 0){
    $books[] = getIdLivro($dados["destaque_3"]);
}

require_once("frontoffice/componentes/header.php");
require_once("frontoffice/views/home_view.php");
require_once("frontoffice/componentes/footer.php");

?>