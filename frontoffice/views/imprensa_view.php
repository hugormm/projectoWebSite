    <main id="main" class="container-fluid">

        <div class="row justify-content-end">

            <div class="col-12 col-md-11">

                <div class="row box_paginas d-flex">
                    <div class="col-7">
                        <div class="row d-flex flex-column">
                            <div class="title_box col px-0" style="margin: 50px 0px 10px 102px">
                                <div>Imprensa</div>
                            </div>
                            <div class="sub_box col px-0" style="margin-left: 102px;">
                                <p>
                                    Ultimas notícias
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>   

        </div>

        <?php foreach($pagina_actual as $d): ?>

        <div class="row margin_mobile_contactos d-flex flex-column <?= ($d["id"] == 1) ? "box_imprensa" : ""; ?>">

            <div class="col-11 col-md-9 mx-auto px-4">
                <div class="sub_box imprensa"><?= $d["titulo"]; ?></div>
                <div class="line_imprensa" style="margin-top: 12px;"></div>
                <div class="date_imprensa float-end" style="margin-top: 12px;"><?= $d["data_publicacao"]; ?></div>
                <img class="img_imprensa" style="margin: 50px 0px;" src="<?= $d["imagem"]; ?>" alt="foto">
                <div class="text_imprensa"><?= $d["texto"]; ?></div>
            </div>

        </div>   

        <?php endforeach; ?>

        <div class="row" style="margin-top: 90px;">

            <div class="col d-flex justify-content-center align-items-center">
                <?php if($numero_pagina > 1): ?>    
                    <a href="<?= $url_base . 'imprensa/' . $numero_pagina-1 ?>">
                        <button class="previous_page"></button>
                    </a>
                <?php endif; ?>

                <?php for($i=1; $i<=$numero_total_paginas; $i++): ?>
                    <a href="<?= $url_base . 'imprensa/' . $i ?>">
                        <button class="paginacao <?= ($numero_pagina == $i) ? "active" : ""; ?>"><?= $i ?></button>
                    </a>
                <?php endfor; ?>

                <?php if($numero_pagina < $numero_total_paginas): ?>
                    <a href="<?= $url_base . 'imprensa/' . $numero_pagina+1 ?>">
                        <button class="next_page"></button>
                    </a>
                <?php endif; ?>
            </div>
            
        </div>

    </main>
