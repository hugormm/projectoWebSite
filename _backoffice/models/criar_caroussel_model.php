<?php

$form = isset($_POST["img_desktop"]) && isset($_POST["img_mobile"]) && isset($_POST["titulo"]);
$form2 = $form && isset($_POST["subtitulo"]) && isset($_POST["tag"]) && isset($_POST["link_botao"]);


if($form2){
    $img_desktop = $_POST["img_desktop"];
    $img_mobile = $_POST["img_mobile"];
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $tag = $_POST["tag"];
    $link_botao = $_POST["link_botao"];

    iduSQL("INSERT INTO cabecalho (imagem, imagem_mobile, titulo, texto, tag, saber_mais)
    VALUES ('$img_desktop', '$img_mobile', '$titulo', '$subtitulo', '$tag', '$link_botao')");

}

require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/criar_caroussel_view.php");
require_once("_backoffice/componentes/footer.php");

?>