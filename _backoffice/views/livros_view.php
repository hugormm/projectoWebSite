    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Livros</h3>
                <br>
                <table class="w-100">
                    <tr>
                        <th>Imagem</th>
                        <th>Titulo</th>
                        <th>Texto</th>
                        <th>Data Actualização</th>
                        <th>Acções</th>
                    </tr>
                    <?php foreach($dados as $d): ?>
                        <tr>
                            <td><img class="imagem" src="<?= $d["foto"]; ?>" alt=""></td>
                            <td><?= $d["titulo"]; ?></td>
                            <td><?= substr($d["texto"], 0, 100); ?>...</td>
                            <td><?= $d["data_actualizacao"]; ?></td>
                            <td>
                                <form action="editar_livros" method="POST">
                                    <button name="id" value="<?= $d["id"]; ?>">Editar</button>
                                </form>
                                <br>
                                <form action="apagar_livros" method="POST">
                                    <button name="id" value="<?= $d["id"]; ?>">APAGAR</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <br><br>
                <a href="<?= $url_base ?>backoffice/criar_livro">
                    <button>Criar Novo Livro</button>
                </a>
            </div>
        </div>
        
    </main>