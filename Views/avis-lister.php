
<?php

    function cell($param){
        return "<td>$param</td>";
    }

    function row($param){
        return "<tr>$param</tr>";
    }

    function table($param){
        return "<table>$param</table>";
    }

    $title = "Liste des avis";
    $content = '';
    $content .= row(cell("<a href='http://localhost/SEMESTRE4/RATING/index.php?cont=avis-lister&filtre=id'>id</a>").cell("<a href='http://localhost/SEMESTRE4/RATING/index.php?cont=avis-lister&filtre=etudiant'>etudiant</a>".cell("<a href='http://localhost/SEMESTRE4/RATING/index.php?cont=avis-lister&filtre=note'>note</a>")).cell("<a href='http://localhost/SEMESTRE4/RATING/index.php?cont=avis-lister&filtre=commentaire'>commentaire</a>"));
    foreach($avis as $a){
        $id = $a['id'];
        if (strlen($a["commentaire"])>50){
            $content .= row(cell($id).cell($a["etudiant"]).cell($a["note"]).cell("<a href='http://localhost/SEMESTRE4/RATING/index.php?cont=avis-details&id=$id'>plus</a>"));
        }
        else{
            $content .= row(cell($id).cell($a["etudiant"]).cell($a["note"]).cell($a["commentaire"]));
        }
    }
    $content = table($content);

    include "gabarit.php";
?>