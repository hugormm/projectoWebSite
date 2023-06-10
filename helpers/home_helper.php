<?php

function getHome(){
    return selectSQLUnico("SELECT * FROM home");
}

?>