<?php

$dados = getLivros();
$dados_home = getHome();

$form = isset($_POST["id"]) && isset($_POST["dados_livro"]);

if($form){
    $id = $_POST["id"];
    $dados_livro = $_POST["dados_livro"];
}

$form2 = isset($_POST["id"]) && isset($_POST["id_livro"]) && isset($_POST["observacao"]);

if($form2){
    $id = $_POST["id"];
    $id_livro = $_POST["id_livro"];
    $observacao = $_POST["observacao"];
    iduSQL("UPDATE home SET destaque_$id='$id_livro', observacao_$id='$observacao'");
}



require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/editar_destaque_view.php");
require_once("_backoffice/componentes/footer.php");

?>