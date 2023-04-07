<?php

    function get_avis(){
        global $PDO;
        $tri = $_GET['filtre'] ?? 'id';
        $max = $_GET['max'] ?? '20';
        $offset = $_GET['offset'] ?? '0';
        
        $colonnes = array('id','etudiant','note','commentaire');
        if(in_array($tri , $colonnes)){
            $query = $PDO->prepare("SELECT * FROM avis ORDER BY $tri ASC LIMIT ".intval($max).'OFFSET '.intval($offset));
        }
        else{
            $query = $PDO->prepare("SELECT * FROM avis");
        }
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>

