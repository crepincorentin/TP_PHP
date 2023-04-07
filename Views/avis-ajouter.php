
<?php
    $content ='<form action="?cont=avis-lister" method="post">';
    $content.='<p>';
    $content.='<label for="departement">Departement</label> : <input type="text" name="departement" id="departement" /><br />';
    $content.='<label for="promo">Promo</label> : <input type="text" name="promo" id="promo" /><br />';
    $content.='<label for="module">Module</label> : <input type="text" name="module" id="module" /><br />';
    $content.='<label for="etudiant">Etudiant</label> : <input type="text" name="etudiant" id="etudiant" /><br />';
    $content.='<label for="commentaire">Commentaire</label> : <input type="text" name="commentaire" id="commentaire" /><br />';
    $content.='<label for="note">Note</label> : <input type="text" name="note" id="note" /><br />';
    $content.='<input type="submit" value="Envoyer" />';
    $content.='</p>';
    $content.='</form>';
    include "gabarit.php";
?>