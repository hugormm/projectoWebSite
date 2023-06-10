    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Destaques</h3>
                <br>
                <table class="w-100">
                    <tr>
                        <th>Imagem</th>
                        <th>Titulo</th>
                        <th>Observação</th>
                        <th>Acções</th>
                    </tr>
                    <?php for($i=0; $i<count($books); $i++): ?>
                        <?php $b = $books[$i]; ?>
                        <?php $id = $i + 1; ?>
                        <tr>
                            <?php if(!empty($books[$i])): ?>
                                <td><img class="imagem" src="<?= $b["foto"]; ?>" alt=""></td>
                                <td><?= $b["titulo"]; ?></td>
                                <td><?= $dados["observacao_$id"] ?></td>
                                <td>
                                    <form action="editar_destaque" method="POST">
                                        <input type="hidden" name="dados_livro" value="<?= $b["titulo"]; ?>">
                                        <button name="id" value="<?= $id ?>">Editar</button>
                                    </form>
                                </td>
                            <?php else: ?>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>
                                    <form action="editar_destaque" method="POST">
                                        <input type="hidden" name="dados_livro" value="0">
                                        <button name="id" value="<?= $id ?>">Editar</button>
                                    </form>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>
    </main>