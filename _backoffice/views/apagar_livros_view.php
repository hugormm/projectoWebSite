    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Apagar Livro</h3>
                <br>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <label for="">Tem a certeza que quer apagar?</label>
                    <br><br>
                    <label for="resposta">Sim</label>
                    <input type="radio" name="resposta" value="SIM">
                    <label for="resposta">Nao</label>
                    <input type="radio" name="resposta" value="NAO" checked>
                    <br><br>
                    <input type="submit" value="Validar">
                </form>
                <br>
                <?php if($form2 && $validado): ?>
                    <p style="color: white; font-size: 22px;">Livro apagado com sucesso</p>
                <?php endif; ?>
                <a href="<?= $url_base ?>backoffice/livros">
                    <button>Voltar</button>
                </a>
            </div>
        </div>
        
    </main>
