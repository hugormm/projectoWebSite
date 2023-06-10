    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Caroussel</h3>
                <br>
                <table class="w-100">
                    <tr>
                        <th>Imagem Desktop</th>
                        <th>Imagem Mobile</th>
                        <th>Titulo</th>
                        <th>Texto</th>
                        <th>Data Actualizacao</th>
                        <th>Accoes</th>
                    </tr>
                    <?php foreach($dados as $d): ?>
                        <tr>
                            <td><img class="imagem" src="<?= $d["imagem"]; ?>" alt=""></td>
                            <td><img class="imagem" src="<?= $d["imagem_mobile"]; ?>" alt=""></td>
                            <td><?= $d["titulo"]; ?></td>
                            <td><?= $d["texto"]; ?></td>
                            <td><?= $d["data_actualizacao"]; ?></td>
                            <td>
                                <form action="editar_caroussel" method="POST">
                                    <button name="id" value="<?= $d["id"]; ?>">Editar</button>
                                </form>
                                <br>
                                <form action="apagar_caroussel" method="POST">
                                    <button name="id" value="<?= $d["id"]; ?>">APAGAR</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <br>
                <a href="<?= $url_base ?>backoffice/criar_caroussel">
                    <button>Criar Novo Banner</button>
                </a>
            </div>
        </div>
    </main>