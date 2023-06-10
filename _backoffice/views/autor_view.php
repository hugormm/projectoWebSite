    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Autor</h3>
                <br>
                <img class="imagem_autor" src="<?= $dados["foto"]; ?>" alt="">
                <br><br>
                <p><?=$dados["texto"]; ?></p>
                <a href="<?= $url_base ?>backoffice/editar_autor">
                    <button>Editar</button>
                </a>
            </div>
        </div>  
    </main>