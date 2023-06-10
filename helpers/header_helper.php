<?php

function getCabecalho(){
    return selectSQL("SELECT * FROM cabecalho");
}

function getRedes(){
    return selectSQL("SELECT * FROM redes_sociais");
}

?>