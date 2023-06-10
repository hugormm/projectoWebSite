<?php

$form = isset($_POST["img_livro"]) && isset($_POST["titulo"]) && isset($_POST["texto"]);

if($form){
    $img_livro = $_POST["img_livro"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];

    iduSQL("INSERT INTO livros (foto, titulo, texto) VALUES ('$img_livro', '$titulo', '$texto')");

}

require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/criar_livro_view.php");
require_once("_backoffice/componentes/footer.php");

?>