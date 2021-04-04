<?php
include_once('database.php');

function message($email, $contenu, $etudiant_id)
{
    $archive = 1;
    global $pdo;
    $insertion = $pdo->prepare("INSERT INTO message_etudiant (email, contenu, etudiant_id, archive) VALUES (?,?,?,?) ");
    $insertion->execute([$email, $contenu, $etudiant_id, $archive]);
}


function findAll()
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM message_etudiant WHERE archive = 1");

    $req->execute();

    $result = count($req->fetchAll(PDO::FETCH_OBJ));

    return $result;
}
