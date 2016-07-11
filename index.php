<?php
    session_start();

    include("configs.php");

    (empty($_GET['page'])) ? $url = HOME : $url = $_GET['page'];
    $file = "pages/".$url;

    include("modules/header.php");


    if(file_exists($file)) {
        include($file);
    }
    else {
        include("pages/error.php");
    }


    include("modules/footer.php");
?>
    
    
    