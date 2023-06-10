<?php

function getIdLivro($id){
    return selectSQLUnico("SELECT * FROM livros WHERE id=$id");
}

function getLivros(){
    return selectSQL("SELECT * FROM livros");
}

?>