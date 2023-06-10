    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Editar Publicação</h3>
                <br>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <label for="">Link da imagem da publicação:</label>
                    <br>
                    <input type="text" name="imagem" value="<?= $dados["imagem"]; ?>">
                    <a href="<?= $url_base; ?>tiny/tinyfilemanager.php" target="_blank">
                        <img src="<?= $url_base; ?>public/SVG/file.svg" class="file_manager" alt="">
                    </a>
                    <br><br>
                    <label for="">Titulo da publicação:</label>
                    <br>
                    <input type="text" name="titulo" value="<?= $dados["titulo"]; ?>">
                    <br><br>
                    <label for="">Texto da publicação:</label>
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
                    <label for="">Data da publicação:</label>
                    <br>
                    <input type="text" name="data" value="<?= $dados["data_publicacao"]; ?>">
                    <br><br>
                    <input type="submit" value="Editar">
                </form>
                <br>
                <?php if($form2): ?>
                    <p style="color: white; font-size: 22px;">Dados editados com sucesso</p>
                <?php endif; ?>
                <br>
                <a href="<?= $url_base ?>backoffice/imprensa">
                    <button>Voltar</button>
                </a>
            </div>
        </div>
        
    </main>
