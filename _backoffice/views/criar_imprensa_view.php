    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Criar Nova Postagem</h3>
                <br>
                <form action="" method="POST">
                    <label for="">Link da imagem da Postagem:</label>
                    <br>
                    <input type="text" name="img_post">
                    <a href="<?= $url_base; ?>tiny/tinyfilemanager.php" target="_blank">
                        <img src="<?= $url_base; ?>public/SVG/file.svg" class="file_manager" alt="">
                    </a>
                    <br><br>
                    <label for="">Titulo da Postagem</label>
                    <br>
                    <input type="text" name="titulo">
                    <br><br>
                    <label for="">Texto da Postagem:</label>
                    <br>
                    <textarea name="texto" id="editor" cols="30" rows="10"></textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                    <br><br>
                    <label for="">Data da Postagem:</label>
                    <br>
                    <input type="text" name="data">
                    <br><br>
                    <input type="submit" value="Criar">
                </form>
                <br>
                <?php if($form): ?>
                    <p style="color: white; font-size: 22px;">Dados criados com sucesso</p>
                <?php endif; ?>
                <br>
                <a href="<?= $url_base ?>backoffice/imprensa">
                    <button>Voltar</button>
                </a>
            </div>
        </div>
        
    </main>
