<?php

function getContactos(){
    return selectSQLUnico("SELECT * FROM contactos");
}

?>