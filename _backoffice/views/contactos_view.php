    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3> Contactos</h3>
                <br>
                <form action="" method="POST">
                    <label for="">Morada</label>
                    <br>
                    <input type="text" name="morada" value="<?= $dados["morada"] ?>">
                    <br><br>
                    <label for="">Telefone</label>
                    <br>
                    <input type="text" name="telefone" value="<?= $dados["telefone"] ?>">
                    <br><br>
                    <label for="">E-mail</label>
                    <br>
                    <input type="text" name="email" value="<?= $dados["email"] ?>">
                    <br><br>
                    <input type="submit" value="Editar Contactos">
                </form>
                <br>
                <?php if($form): ?>
                    <p style="color: white; font-size: 22px;">Contactos editados com sucesso!</p>
                <?php endif; ?>
            </div>
        </div>
        
    </main>