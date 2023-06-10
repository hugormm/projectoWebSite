<?php

date_default_timezone_set("Europe/Lisbon");

$form = isset($_POST["id"]);

if($form){
    $id = $_POST["id"];
    $dados = selectSQLUnico("SELECT * FROM livros WHERE id=$id");
}

$form2 = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]);

if($form2){
    $imagem = $_POST["imagem"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $data = date("H:i:s - d/m/Y");

    iduSQL("UPDATE livros SET imagem='$imagem', titulo='$titulo', texto='$texto', data_actualizacao='$data' WHERE id=$id");

}

require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/editar_livros_view.php");
require_once("_backoffice/componentes/footer.php");

?>