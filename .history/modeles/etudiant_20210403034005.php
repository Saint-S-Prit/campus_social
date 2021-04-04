<?php
include_once('database.php');

function add($prenom, $nom, $email, $mdp, $genre, $codifier)
{
    global $pdo;
    $insertion = $pdo->prepare('INSERT INTO etudiant (prenom,nom,email,mdp,genre,codifier) values (?,?,?,?,?,?)');
    $insertion->execute([$prenom, $nom, $email, $mdp, $genre, $codifier]);


    echo "l'identifiant de d'étudiant " . $prenom . " " . $nom . " est :<span style=color:red; font-weight:bold>" . $mdp . "</span>";
}

function lister()
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM etudiant WHERE archive = 1");

    $req->execute();

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}

function findOneById($id)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM etudiant WHERE id = ?");

    $req->execute([$id]);

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}



function deleteEtudiantById($id)
{
    global $pdo;
    $req = $pdo->prepare("UPDATE etudiant SET archive = 0  WHERE id= ?");
    $req->execute([$id]);
}

function getSite($pavillon)
{
    global $pdo;
    $req = $pdo->prepare("SELECT site_id FROM pavillon WHERE ?");
    $req->execute([$pavillon]);

    $req->fetch(PDO::FETCH_OBJ);
}


function EditeEtudiantById($prenom, $nom, $email, $genre, $mdp, $codifier, $id)
{
    global $pdo;
    $req = $pdo->prepare("UPDATE etudiant SET prenom = :prenom, nom = :nom, email = :email, genre = :genre, mdp = :mdp, codifier = :codifier WHERE id= :id");
    $req->bindValue('prenom', $prenom);
    $req->bindValue('nom', $nom);
    $req->bindValue('email', $email);
    $req->bindValue('genre', $genre);
    $req->bindValue('mdp', $mdp);
    $req->bindValue('codifier', $codifier);
    $req->bindValue('id', $id);

    if (!$req->execute()) {
        $error = 'Erreur';
    } else {
        $error = "Données enreistrées avec succés !";
    }
}


function update($id)
{
    global $pdo;
    $req = $pdo->prepare("UPDATE user SET statut  WHERE id= ?");
    $req->execute([$id]);
}


function role()
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM role");

    $req->execute();

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}

function getInfoEtudiant($id)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM etudiant WHERE id = $id");

    $req->execute();

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}

function getInfoSite($id)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM site WHERE id = $id");

    $req->execute();

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}
