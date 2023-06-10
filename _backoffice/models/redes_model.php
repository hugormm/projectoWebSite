<?php

$form = isset($_POST["instagram"]) && isset($_POST["facebook"]) && isset($_POST["linkedin"]);

if($form){
    $instagram = $_POST["instagram"];
    $facebook = $_POST["facebook"];
    $linkedin = $_POST["linkedin"];
    iduSQL("UPDATE redes_sociais SET link='$instagram' WHERE id=1");
    iduSQL("UPDATE redes_sociais SET link='$facebook' WHERE id=2");
    iduSQL("UPDATE redes_sociais SET link='$linkedin' WHERE id=3");
}

$dados = getRedes();

require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/redes_view.php");
require_once("_backoffice/componentes/footer.php");

?>