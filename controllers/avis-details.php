<?php
    require "Models/connect-db.php";
    require "Models/avis-details.php";
    $commentaire = get_commentaire();
    require "Views/avis-details.php";
?>