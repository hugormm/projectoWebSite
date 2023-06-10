<?php

$dados = getImprensa();

$total_por_pagina = 2;

if(empty($rota[1])){
    $numero_pagina = 1;
}
else{
    $numero_pagina = $rota[1];
}

$numero_total_paginas = ceil(count($dados) / $total_por_pagina);
$pagina_actual = array_slice($dados, ($numero_pagina-1)*$total_por_pagina, $total_por_pagina);


require_once("frontoffice/componentes/header.php");
require_once("frontoffice/views/imprensa_view.php");
require_once("frontoffice/componentes/footer.php");

?>