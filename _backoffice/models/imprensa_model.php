<?php

$dados = getImprensa();

$form = isset($_POST["id"]);

if($form){
    $id = $_POST["id"];
    iduSQL("DELETE FROM imprensa WHERE id=$id");
}

require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/imprensa_view.php");
require_once("_backoffice/componentes/footer.php");

?>