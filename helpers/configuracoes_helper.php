<?php

function getBackoffice(){
    return selectSQLUnico("SELECT * FROM backoffice");
}

?>