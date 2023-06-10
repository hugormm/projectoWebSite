<?php

$form = isset($_POST["id"]);

$form2 = isset($_POST["resposta"]);

if($form){
    $id = $_POST["id"];
}

if($form2){
    $validado = false;
    $resposta = $_POST["resposta"];
    if($resposta == "NAO"){
        header("Location: ". $url_base . "backoffice/imprensa");
        exit(); 
    }
    elseif($resposta == "SIM"){
        iduSQL("DELETE FROM imprensa WHERE id=$id");
        $validado = true;
    }

}

require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/apagar_imprensa_view.php");
require_once("_backoffice/componentes/footer.php");

?>