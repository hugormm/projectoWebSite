<?php

if(!verificarLogado()){
    header("Location: ". $url_base . "backoffice");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecto Final Backoffice</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $url_base; ?>public/Css/backoffice.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</head>
<body>
    <header class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row box mt-3 w-75 p-4 text-center">
            <div class="col">
                <h3>Backoffice</h3>
            </div>
        </div>  
    </header>