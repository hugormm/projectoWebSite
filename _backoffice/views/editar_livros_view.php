    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Editar Livro</h3>
                <br>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <label for="">Link da imagem do Livro:</label>
                    <br>
                    <input type="text" name="imagem" value="<?= $dados["foto"]; ?>">
                    <a href="<?= $url_base; ?>tiny/tinyfilemanager.php" target="_blank">
                        <img src="<?= $url_base; ?>public/SVG/file.svg" class="file_manager" alt="">
                    </a>
                    <br><br>
                    <label for="">Titulo do Livro:</label>
                    <br>
                    <input type="text" name="titulo" value="<?= $dados["titulo"]; ?>">
                    <br><br>
                    <label for="">Texto do Livro:</label>
                    <br>
                    <textarea name="texto" id="editor" cols="30" rows="10"><?= $dados["texto"]; ?></textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                    <br><br>
                    <input type="submit" value="Editar">
                </form>
                <br>
                <?php if($form2): ?>
                    <p style="color: white; font-size: 22px;">Dados editados com sucesso</p>
                <?php endif; ?>
                <br>
                <a href="<?= $url_base ?>backoffice/livros">
                    <button>Voltar</button>
                </a>
            </div>
        </div>
        
    </main>
