<?php

$dados = getLivros();

$form = isset($_POST["id"]);

if($form){
    $id = $_POST["id"];
    iduSQL("DELETE FROM livros WHERE id=$id");
}

require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/livros_view.php");
require_once("_backoffice/componentes/footer.php");

?>