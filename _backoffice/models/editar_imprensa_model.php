<?php

$form = isset($_POST["id"]);

if($form){
    $id = $_POST["id"];
    $dados = selectSQLUnico("SELECT * FROM imprensa WHERE id=$id");
}

$form2 = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]) && isset($_POST["data"]);

if($form2){
    $imagem = $_POST["imagem"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $data = $_POST["data"];

    iduSQL("UPDATE imprensa SET imagem='$imagem', titulo='$titulo', texto='$texto', data_publicacao='$data' WHERE id=$id");

}

require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/editar_imprensa_view.php");
require_once("_backoffice/componentes/footer.php");

?>