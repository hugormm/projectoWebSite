<?php

date_default_timezone_set("Europe/Lisbon");

function fazerLogin($login, $senha){
    $resultado = selectSQLunico("SELECT * FROM backoffice WHERE login='$login' AND senha='$senha';" );
    if(!empty($resultado)){
        session_start();
        $_SESSION["login"] = $resultado["login"];
        $_SESSION["nome"] = $resultado["nome"];
        $_SESSION["data_ultimo_acesso"] = $resultado["data_ultimo_acesso"];

        $id = $resultado["id"];

        $data = date("H:i:s - d/m/Y");

        iduSQL("UPDATE backoffice SET data_ultimo_acesso='$data' WHERE id=$id");

        return true;
    }
    else{
        return false;
    }

}

function verificarLogado(){
    session_start();
    $session = isset($_SESSION["login"]) && isset($_SESSION["nome"]);
    return $session;
}

?>