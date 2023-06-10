    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Redes Sociais</h3>
                <br>
                <form action="" method="POST">
                    <?php foreach($dados as $d): ?>
                        <label for=""><?= $d["nome"]; ?></label>
                        <br>
                        <input type="text" name="<?= $d["nome"]; ?>" value="<?= $d["link"]; ?>">
                        <br><br>
                    <?php endforeach; ?>
                    <input type="submit" value="Editar Redes Sociais">
                </form>
                <br>
                <?php if($form): ?>
                    <p style="color: white; font-size: 22px;">Redes Sociais editadas com sucesso!</p>
                <?php endif; ?>
            </div>
        </div>
        
    </main>