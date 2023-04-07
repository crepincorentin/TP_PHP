<?php

    function get_commentaire(){
        global $PDO;
        $id = $_GET['id'] ?? '1';
        $query = $PDO->prepare("SELECT commentaire FROM avis WHERE id = ".intval($id));
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
?>