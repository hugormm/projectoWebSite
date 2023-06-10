    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Editar Destaque</h3>
                <br>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <select name="id_livro">
                        <option value="0">---</option>
                        <?php foreach($dados as $d): ?>
                            <option value="<?= $d["id"]; ?>" <?= ($dados_livro == $d["titulo"]) ? "selected" : ""; ?>><?= $d["titulo"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <br><br>
                    <label for="">Observação:</label>
                    <br>
                    <input type="text" name="observacao" value="<?= $dados_home["observacao_$id"] ?>">
                    <br><br>
                    <input type="submit" value="Editar">
                </form>
                <br>
                <?php if($form2): ?>
                    <p style="color: white; font-size: 22px;">Dados editados com sucesso</p>
                <?php endif; ?> 
                <br>
                <a href="<?= $url_base ?>backoffice/destaques">
                    <button>Voltar</button>
                </a>
            </div>
        </div>
        
    </main>
