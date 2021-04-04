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
    $req = $pdo->prepare("SELECT * FROM message_etudiant");

    $req->execute();
    $result = $req->fetchAll(\PDO::FETCH_ASSOC);

    return $result;
}

function etudiant($id)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM etudiant WHERE id = ?");

    $req->execute([$id]);

    $result = $req->fetchAll(\PDO::FETCH_ASSOC);

    return $result;
}

function messageLuByID($id)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM etudiant WHERE id = ?");

    $req->execute([$id]);

    $result = $req->fetchAll(\PDO::FETCH_ASSOC);

    return $result;
}

function updateMessage($id)
{
    global $pdo;
    $req = $pdo->prepare("UPDATE message_etudiant SET archive = 0  WHERE id= ?");
    $req->execute([$id]);
}
