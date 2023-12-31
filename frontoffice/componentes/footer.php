    <footer class="container-fluid">

        <!-- RODAPE DESKTOP -->
        <div class="row d-none d-md-block">

            <div class="col-12 d-flex flex-column align-items-center">

                <div class="line_footer col-11 mx-auto"></div>

                <!-- NAVBAR -->
                <div class="col-12 text-center nav_footer">
                    <nav class="navbar navbar-expand-md py-0">
                        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">

                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link nav-link-footer py-0 <?= ($rota[0] == "") ? "active" : ""; ?>" aria-current="page" href="<?= $url_base; ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-footer py-0 <?= ($rota[0] == "autor") ? "active" : ""; ?>" href="<?= $url_base; ?>autor">Autor</a>
                                </li>
                                <li class="nav-item">
                                    <a onclick="abrir()" class="nav-link nav-link-footer py-0 <?= ($rota[0] == "livros") ? "active" : ""; ?>" href="#">Livros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-footer py-0 <?= ($rota[0] == "imprensa") ? "active" : ""; ?>" href="<?= $url_base; ?>imprensa">Imprensa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-footer py-0 <?= ($rota[0] == "contactos") ? "active" : ""; ?>" href="<?= $url_base; ?>contactos">Contactos</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="line_footer col-11"></div>

            </div>

            <div class="row contactos d-flex justify-content-center gap-4">

                <div class="col-5 d-flex flex-column px-0">

                    <div class="title_contactos">CONTACTOS</div>
                    <div class="row" style="margin-top: 20px; margin-left: 0px;">
                        <div class="col-5 px-0">
                            <div class="sub_contactos">MORADA</div>
                            <div class="sub_text"><?= $dados_contactos["morada"] ?></div>
                        </div>
                        <div class="col-4 px-0">
                            <div class="sub_contactos">TELEFONE</div>
                            <div class="sub_text"><?= $dados_contactos["telefone"] ?></div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="sub_contactos">EMAIL</div>
                            <div class="sub_text"><?= $dados_contactos["email"] ?></div>
                        </div>
                    </div>
                    <div class="img_contactos" style="margin-top: 58px;">
                        <img src="<?= $url_base; ?>public/SVG/livroreclamacoes.svg" alt="">
                        <img style="margin-left: 43px;" src="<?= $url_base; ?>public/SVG/ralc.svg" alt="">
                    </div>

                </div>

                <div class="col-4 d-flex flex-column align-items-center px-0">

                    <div class="title_redes">SIGA-ME NAS REDES SOCIAIS</div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col d-flex gap-4">
                            <?php foreach($dados_redes as $d): ?>
                                <a href="<?= $d["link"] ?>">
                                    <img class="icons" src="<?= $url_base . $d["imagem"]; ?>" alt="imagem_redes">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="copyright text-center" style="margin-top: 88px;">
                        <a id="cookies" href="#">Politica de Cookies.</a> 
                        <br>
                        <div>Copyright © 2021 Grupo MediaMaster. Todos os direitos reservados.</div>
                    </div>

                </div>

            </div>

        </div>

        <!-- RODAPE MOBILE -->
        <div class="row d-block d-md-none mx-0">

            <div class="line_footer col-11 mx-auto"></div>

            <div class="row contactos d-flex flex-column text-center mx-auto px-0" style="margin-top: 60px;">

                <div class="col-12 d-flex flex-column px-0 w-100 <?= ($rota[0] == "contactos") ? "d-none" : ""; ?>">

                    <div class="title_contactos">CONTACTOS</div>
                    <div class="row d-flex flex-column justify-content-center align-items-center gap-3" style="margin-top: 20px; margin-left: 0px;">
                        <div class="col-8 px-0">
                            <div class="sub_contactos">MORADA</div>
                            <div class="sub_text"><?= $dados_contactos["morada"] ?></div>
                        </div>
                        <div class="col-6 px-0">
                            <div class="sub_contactos">TELEFONE</div>
                            <div class="sub_text"><?= $dados_contactos["telefone"] ?></div>
                        </div>
                        <div class="col-6 px-0">
                            <div class="sub_contactos">EMAIL</div>
                            <div class="sub_text"><?= $dados_contactos["email"] ?></div>
                        </div>
                    </div>

                </div>

                <div class="col-12 d-flex flex-column align-items-center px-0" style="margin-top: 40px;">

                    <div class="title_redes">SIGA-ME NAS REDES SOCIAIS</div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col d-flex gap-4">
                            <?php foreach($dados_redes as $d): ?>
                                <a href="<?= $d["link"] ?>">
                                    <img class="icons" src="<?= $url_base . $d["imagem"]; ?>" alt="imagem_redes">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-12 img_contactos" style="margin-top: 64px;">
                        <a href="#">
                            <img src="<?= $url_base; ?>public/SVG/livroreclamacoes.svg" alt="">
                        </a>
                           
                        <a href="#">
                            <img style="margin-left: 43px;" src="<?= $url_base; ?>public/SVG/ralc.svg" alt="">
                        </a> 
                    </div>
                    <div class="copyright text-center" style="margin-top: 43px;">
                        <a id="cookies" href="#">Politica de Cookies.</a> 
                        <br>
                        <div>Copyright © 2021 Grupo MediaMaster. Todos os direitos reservados.</div>
                    </div>

                </div>

            </div>

        </div>

    </footer>

    <script src="<?= $url_base; ?>public/js/main.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>