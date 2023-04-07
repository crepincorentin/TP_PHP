<?php
    $cont = $_GET['cont'] ?? 'error';
    if (file_exists("controllers/{$cont}.php")){
        require "controllers/{$cont}.php";
    }
    else {
        $ERROR = 1;
        require "controllers/error.php";
    }
?>