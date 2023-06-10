<?php

date_default_timezone_set("Europe/Lisbon");

$form = isset($_POST["id"]);

if($form){
    $id = $_POST["id"];
    $dados = selectSQLUnico("SELECT * FROM cabecalho WHERE id=$id");
}

$form2 = isset($_POST["img_desktop"]) && isset($_POST["img_mobile"]) && isset($_POST["titulo"]);
$form3 = $form && isset($_POST["subtitulo"]) && isset($_POST["tag"]) && isset($_POST["link_botao"]);


if($form2){
    $img_desktop = $_POST["img_desktop"];
    $img_mobile = $_POST["img_mobile"];
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $tag = $_POST["tag"];
    $link_botao = $_POST["link_botao"];
    $data = date("H:i:s - d/m/Y");
    iduSQL("UPDATE cabecalho SET imagem='$img_desktop', imagem_mobile='$img_mobile', titulo='$titulo' WHERE id=$id");
    iduSQL("UPDATE cabecalho SET texto='$subtitulo', tag='$tag', saber_mais='$link_botao', data_actualizacao='$data' WHERE id=$id");

}

require_once("_backoffice/componentes/header_edicao.php");
require_once("_backoffice/views/editar_caroussel_view.php");
require_once("_backoffice/componentes/footer.php");

?>