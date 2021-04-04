<?php
include_once('database.php');

function find($pavillon, $chambre)
{
    global $pdo;

    $req = $pdo->prepare("SELECT * FROM etudiant WHERE pavillon = ? AND chambre = ? ");

    $req->execute([$pavillon, $chambre]);
    $result = $req->fetchAll(PDO::FETCH_OBJ);
}
