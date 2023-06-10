<!-- 
Hugo Moreira
Projecto Final - Sebastiao Alves
Data inicio: 06/02/2023 
-->

<?php

$livros = getLivros();
$dados_header = getCabecalho();
$dados_contactos = getContactos();
$dados_redes = getRedes();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecto Final - Sebastiao Alves</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= $url_base; ?>public/Css/style.css">
    <link rel="stylesheet" href="<?= $url_base; ?>public/Css/fonts.css">
    <script src="<?= $url_base; ?>public/js/funcoes.js"></script>
</head>

<body class="m-auto">

    <header class="container-fluid">

    <!-- CABECALHO DESKTOP -->
    <div class="row d-flex flex-column align-items-center d-none d-md-block" id="top">

        <div class="col-12 d-flex justify-content-center" style="margin-top: 52px;">

            <div class="col-6 text-center">
                <div class="top_title">Sebastião Alves</div>
            </div>

        </div>

        <div class="line_title col-11 mx-auto" style="margin: 15px;"></div>

        <div class="col-12 text-center">

            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-md py-0">
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">

                    <ul class="navbar-nav d-flex gap-3">
                        <li class="nav-item">
                            <a class="nav-link py-0 <?= ($rota[0] == "") ? "active" : ""; ?>" aria-current="page" href="<?= $url_base; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a onclick="scroll('#main')" class="nav-link py-0 <?= ($rota[0] == "autor") ? "active" : ""; ?>" href="<?= $url_base; ?>autor">Autor</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="book_menu" class="nav-link py-0 <?= ($rota[0] == "livros") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Livros
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach($livros as $l): ?>
                                    <li><a class="dropdown-item" href="<?= $url_base . "livros/" . $l["id"]; ?>"><?= $l["titulo"] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 <?= ($rota[0] == "imprensa") ? "active" : ""; ?>" href="<?= $url_base; ?>imprensa">Imprensa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 <?= ($rota[0] == "contactos") ? "active" : ""; ?>" href="<?= $url_base; ?>contactos">Contactos</a>
                        </li>
                    </ul>

                </div>
            </nav>

        </div>

    </div>

    <!-- CAROUSSEL -->
    <div class="row d-none d-md-block">

        <div class="col-12 d-flex justify-content-center p-0 carousel_position">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <?php for($i=0; $i<count($dados_header); $i++): ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" class="<?= ($i == 0) ? "active" : ""; ?>" aria-current="true" aria-label="Slide 1"></button>
                    <?php endfor; ?>
                </div>

                <div class="carousel-inner">
                    
                    <?php for($i=0; $i<count($dados_header); $i++): ?>

                        <?php $d = $dados_header[$i]; ?>

                        <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>" data-bs-interval="5000">
                            <img src="<?= $d["imagem"]; ?>" class="img_carousel" alt="img_1">
                            <div class="cabecalho_text carousel-caption d-none d-md-block">
                                <div class="banner_new"><?= $d["tag"] ?></div>
                                <div class="banner_title"><?= $d["titulo"] ?></div>
                                <div class="banner_text"><?= $d["texto"] ?></div>
                                <a href="<?= $d["saber_mais"] ?>">
                                    <button style="margin-top: 15px;" class="banner_button"></button>
                                </a>
                            </div>
                        </div>

                    <?php endfor; ?>

                </div>

            </div>
        
        </div>

    </div>

    <!-- CABECALHO MOBILE -->
    <div class="row d-block d-md-none px-0" id="top_mobile">

        <div class="col-12 px-0" style="margin-top: 70px;">

            <div class="col-12 d-flex flex-nowrap justify-content-between px-4">
                <div class="top_title_mobile">Sebastião Alves</div>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="line_title mobile col-11 mx-auto" style="margin-top: 15px;"></div>

        </div>
    
        <div class="col-12 text-center px-0">

            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-md bg-body-tertiary">
                <div class="container-fluid px-0">
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                        <ul class="navbar-nav d-flex gap-3">
                            <li class="nav-item">
                                <a class="nav-link py-0 <?= ($rota[0] == "") ? "active" : ""; ?>" aria-current="page" href="<?= $url_base; ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-0 <?= ($rota[0] == "autor") ? "active" : ""; ?>" href="<?= $url_base; ?>autor">Autor</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link py-0 <?= ($rota[0] == "livros") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Livros
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach($livros as $l): ?>
                                        <li><a class="dropdown-item" href="<?= $url_base . "livros/" . $l["id"]; ?>"><?= $l["titulo"] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-0 <?= ($rota[0] == "imprensa") ? "active" : ""; ?>" href="<?= $url_base; ?>imprensa">Imprensa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-0 <?= ($rota[0] == "contactos") ? "active" : ""; ?>" href="<?= $url_base; ?>contactos">Contactos</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

        </div>

    </div>

    <!-- CAROUSSEL -->
    <div class="row d-block d-md-none border">

        <div class="col-12 d-flex justify-content-center p-0 carousel_position mobile">

            <div id="carouselExampleCaptions2" class="carousel mobile slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <?php for($i=0; $i<count($dados_header); $i++): ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="<?= $i; ?>" class="<?= ($i == 0) ? "active" : ""; ?>" aria-current="true" aria-label="Slide 1"></button>
                    <?php endfor; ?>
                </div>

                <div class="carousel-inner">

                    <?php for($i=0; $i<count($dados_header); $i++): ?>

                        <?php $d = $dados_header[$i]; ?>

                            <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>" data-bs-interval="5000">
                                <img src="<?= $d["imagem_mobile"]; ?>" class="img_carousel mobile" alt="img_1">
                                <div class="carousel-caption mobile">
                                    <div class='banner_new mt-0'><?= $d["tag"] ?></div>
                                    <div class="banner_title <?= ($i == 0) ? "" : "sem_novidade mobile"; ?>"><?= $d["titulo"] ?></div>
                                    <div class="banner_text"><?= $d["texto"] ?></div>
                                    <a href="<?= $d["saber_mais"] ?>">
                                        <button style="margin-top: 15px;" class="banner_button"></button>
                                    </a>
                                </div>
                            </div>

                    <?php endfor; ?>

                </div>

            </div>

        </div>

    </div>

    </header>