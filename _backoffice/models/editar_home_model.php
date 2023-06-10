<?php

$dados = getHome();

$form = isset($_POST["imagem"]) && isset($_POST["texto"]);

if($form){
    $imagem = $_POST["imagem"];
    $texto = $_POST["texto"];
    
    iduSQL("UPDATE home SET imagem='$imagem', texto='$texto'");
}

require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/editar_home_view.php");
require_once("_backoffice/componentes/footer.php");

?>