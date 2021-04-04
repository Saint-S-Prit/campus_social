<?php
include_once('database.php');

function add($mois, $statut, $etudiant_id)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM etudiant WHERE mdp = ? AND archive = 1");
    $req->execute([$etudiant_id]);
    $resultat = $req->fetch(PDO::FETCH_OBJ);

    if ($resultat) {
        $id = $resultat->id;
        $insertion = $pdo->prepare('INSERT INTO mensualite (mois, statut, etudiant_id) values (?,?,?)');
        $insertion->execute([$mois, $statut, $id]);
    } else {
        echo "l'identifiant n'existe pas !";
    }
}

function listEtudiantByMois($mois, $statut)
{
    $collectionEtudiant = [];
    global $pdo;
    $req = $pdo->prepare("SELECT etudiant_id FROM mensualite WHERE mois = ? && statut = ? ");
    $req->execute([$mois, $statut]);
    $resultats = $req->fetchAll(PDO::FETCH_OBJ);


    foreach ($resultats as $resultat) {
        $req = $pdo->prepare("SELECT  * FROM etudiant WHERE id = ?");
        $req->execute([$resultat->etudiant_id]);
        $find = $req->fetch(PDO::FETCH_OBJ);

        $collectionEtudiant[] = $find;
    }


    return $collectionEtudiant;
}
