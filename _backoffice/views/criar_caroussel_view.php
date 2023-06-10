    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Criar Caroussel</h3>
                <br>
                <form action="" method="POST">
                    <label for="">Link da imagem desktop do Banner:</label>
                    <br>
                    <input type="text" name="img_desktop">
                    <a href="<?= $url_base; ?>tiny/tinyfilemanager.php" target="_blank">
                        <img src="<?= $url_base; ?>public/SVG/file.svg" class="file_manager" alt="">
                    </a>
                    <br><br>
                    <label for="">Link da imagem mobile do Banner:</label>
                    <br>
                    <input type="text" name="img_mobile">
                    <a href="<?= $url_base; ?>tiny/tinyfilemanager.php" target="_blank">
                        <img src="<?= $url_base; ?>public/SVG/file.svg" class="file_manager" alt="">
                    </a>
                    <br><br>
                    <label for="">Titulo do Banner</label>
                    <br>
                    <input type="text" name="titulo">
                    <br><br>
                    <label for="">Subtitulo do Banner:</label>
                    <br>
                    <textarea name="subtitulo" cols="80" rows="10"></textarea>
                    <br><br>
                    <label for="">Tag</label>
                    <br>
                    <input type="text" name="tag">
                    <br><br>
                    <label for="">Link do Saber Mais:</label>
                    <br>
                    <input type="text" name="link_botao">
                    <br><br>
                    <input type="submit" value="Criar">
                </form>
                <br>
                <?php if($form2): ?>
                    <p style="color: white; font-size: 22px;">Dados criados com sucesso</p>
                <?php endif; ?>
                <br>
                <a href="<?= $url_base ?>backoffice/caroussel">
                    <button>Voltar</button>
                </a>
            </div>
        </div>
        
    </main>
