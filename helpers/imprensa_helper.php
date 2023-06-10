<?php

function getImprensa(){
    return selectSQL("SELECT * FROM imprensa ORDER BY id DESC");
}

?>