<?php

$dados = getBackoffice();

$form = isset($_POST["senha_actual"]) && isset($_POST["nova_senha"]);

if($form){
    $verificado = false;
    $senha_actual = $_POST["senha_actual"];
    $nova_senha = $_POST["nova_senha"];
    if($senha_actual == $dados["senha"]){
        iduSQL("UPDATE backoffice SET senha='$nova_senha'");
        $verificado = true;
    }
    else{
        $verificado = false;
    }
}



require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/configuracoes_view.php");
require_once("_backoffice/componentes/footer.php");

?>