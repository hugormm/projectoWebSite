<?php

if(!verificarLogado()){
    header("Location: ". $url_base . "backoffice");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecto Final Backoffice</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $url_base ?>public/Css/backoffice.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</head>
<body>
    <header class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row box mt-3 p-4 text-center">
            <div class="col-12">
                <h3>Backoffice (<?= ucwords($rota[1]) ?>)</h3>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "inicio") ? "active" : ""; ?>" aria-current="page" href="<?= $url_base ?>backoffice/inicio">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "caroussel") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/caroussel">Caroussel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "home") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "autor") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/autor">Autor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "livros") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/livros">Livros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "destaques") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/destaques">Destaques</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "imprensa") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/imprensa">Imprensa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "contactos") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/contactos">Contactos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "redes") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/redes">Redes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "configuracoes") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/configuracoes">Configurações</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rota[1] == "logoff") ? "active" : ""; ?>" href="<?= $url_base ?>backoffice/logoff">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>