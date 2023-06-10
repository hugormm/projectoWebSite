    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Imprensa</h3>
                <br>
                <table class="w-100">
                    <tr>
                        <th>Imagem</th>
                        <th>Titulo</th>
                        <th>Texto</th>
                        <th>Data Publicação</th>
                        <th>Acções</th>
                    </tr>
                    <?php foreach($dados as $d): ?>
                        <tr>
                            <td><img class="imagem" src="<?= $d["imagem"]; ?>" alt=""></td>
                            <td><?= $d["titulo"]; ?></td>
                            <td><?= $d["texto"] ?></td>
                            <td><?= $d["data_publicacao"] ?></td>
                            <td>
                                <form action="editar_imprensa" method="POST">
                                    <button name="id" value="<?= $d["id"]; ?>">Editar</button>
                                </form>
                                <br>
                                <form action="apagar_imprensa" method="POST">
                                    <button name="id" value="<?= $d["id"]; ?>">APAGAR</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <br>
                <a href="<?= $url_base ?>backoffice/criar_imprensa">
                    <button>Criar Nova Postagem</button>
                </a>
            </div>
        </div>
    </main>