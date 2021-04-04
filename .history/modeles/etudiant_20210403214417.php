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
    $req = $pdo->prepare("SELECT * FROM etudiant");

    $req->execute();

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}
function codification($codifier)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM etudiant WHERE codifier = ?");

    $req->execute([$codifier]);

    $result = $req->fetchAll();

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
    $req = $pdo->prepare("UPDATE etudiant SET archive = !archive  WHERE id= ?");
    $req->execute([$id]);
}

function getSite($pavillon)
{
    global $pdo;
    $req = $pdo->prepare("SELECT site_id FROM pavillon WHERE ?");
    $req->execute([$pavillon]);
    $resultat = $req->fetch(PDO::FETCH_OBJ);

    return $resultat;
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

function pay()
{
    $month = date("m");
    $month = (int)($month);
    switch ($month) {
        case '1':
            $month = "janvier";
            break;
        case '2':
            $month = "fevier";
            break;
        case '3':
            $month = "mars";
            break;
        case '4':
            $month = "avril";
            break;
        case '5':
            $month = "mai";
            break;
        case '6':
            $month = "juin";
            break;
        case '7':
            $month = "juillet";
            break;
        case '8':
            $month = "aout";
            break;
        case '9':
            $month = "septembre";
            break;
        case '10':
            $month = "octobre";
            break;
        case '11':
            $month = "novembre";
            break;
        case '12':
            $month = "decembre";
            break;

        default:
            $month = "";
            break;
    }

    var_dump($month);

    global $pdo;
    $req = $pdo->prepare("SELECT * FROM mensualite WHERE mois = $month");

    $req->execute();

    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
}
