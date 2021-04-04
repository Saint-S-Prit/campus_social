<?php
include_once('database.php');
function add($prenom, $nom, $pseudo, $mdp, $statut)
{
    global $pdo;
    $insertion = $pdo->prepare('INSERT INTO user (prenom,nom,pseudo,mdp,statut) values (?,?,?,?,?)');
    $insertion->execute([$prenom, $nom, $pseudo, $mdp, $statut]);
}

function statut($statut)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM user WHERE statut = ?");

    $req->execute([$statut]);

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}


function effetctif($user)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM user WHERE statut = ?");

    $req->execute([$user]);

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}

function listeEtudiant()
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM etudiant WHERE archive = 1");

    $req->execute();

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}


function role()
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM role");

    $req->execute();

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}
