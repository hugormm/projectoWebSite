<?php

$dados = getAutor();

$form = isset($_POST["foto"]) && isset($_POST["texto"]);

if($form){
    $foto = $_POST["foto"];
    $texto = $_POST["texto"];
    
    iduSQL("UPDATE autor SET foto='$foto', texto='$texto'");
}

require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/editar_autor_view.php");
require_once("_backoffice/componentes/footer.php");

?>