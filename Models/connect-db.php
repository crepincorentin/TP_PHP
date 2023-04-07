<?php
    require "config-db.php" ;
    $PDO = false;
    try {
        $PDO = new PDO ( $DBDRIVER . ':host=' . $DBHOST . ';dbname=' . $DBNAME , $DBUSER , $DBPASSWORD ) ;
    } catch ( PDOException $e ) {
        $ERROR = 2;
        require "../Views/error.php" ;
    }
?>