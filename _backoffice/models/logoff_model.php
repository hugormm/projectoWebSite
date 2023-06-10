<?php

session_start();

session_destroy();

require_once("_backoffice/componentes/header_login.php");
require_once("_backoffice/views/logoff_view.php");
require_once("_backoffice/componentes/footer.php");

?>