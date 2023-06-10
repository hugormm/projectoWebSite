    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row box w-75 p-5 text-center mt-3">
            <div class="col-12">
                <h5>LOGIN</h5>
                <?php if($form): ?>
                    <h5 style="color: red; font-size: 22px;">Login invalido, tente novamente.</h5>
                <?php endif; ?>
                <br>
                <form action="" method="POST">
                    <input type="text" name="login" placeholder="Nome" required="required" style="width: 20%;">
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha" required="required">
                    <br><br>
                    <input type="submit" value="ENTRAR">
                </form>
            </div>
        </div>
    </main>
