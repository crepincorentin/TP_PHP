<?php
    require "Models/connect-db.php";
    require "Models/avis-lister.php";
    $avis = get_avis();
    require "Views/avis-lister.php";
?>