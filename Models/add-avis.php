<?php


    global $PDO;
    $req = $PDO->prepare('INSERT INTO avid(id ,departement,promo,module,etudiant,commentaire,note,date) VALUES((SELECT max(id)+1 FROM avis),:departement,:promo,:module,:etudiant,:commentaire,:note,now())');
    $req->execute(array(
        'departement' => $departement,
        'promo' => $promo,
        'module' => $module,
        'etudiant' => $etudiant,
        'commentaire' => $commentaire,
        'note' => $note
    ));

?>