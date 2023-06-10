<?php

$form = isset($_POST["titulo"]) && isset($_POST["img_post"]) && isset($_POST["texto"]) && isset($_POST["data"]);

if($form){
    $titulo = $_POST["titulo"];
    $img_post = $_POST["img_post"];
    $texto = $_POST["texto"];
    $data = $_POST["data"];

    iduSQL("INSERT INTO imprensa (titulo, imagem, texto, data_publicacao) VALUES ('$titulo', '$img_post', '$texto', '$data')");

}

require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/criar_imprensa_view.php");
require_once("_backoffice/componentes/footer.php");

?>