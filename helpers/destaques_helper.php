<?php

function getDestaques(){
    return selectSQL("SELECT * FROM destaques");
}

?>