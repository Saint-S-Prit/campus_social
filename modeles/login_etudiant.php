<?php

include_once('database.php');

if (isset($_POST['login'])) {
    $pseudo = strip_tags($_POST['pseudo']);
    $mdp = strip_tags($_POST['mdp']);

    if (!empty($pseudo) && !empty($mdp)) {

        $req = $pdo->prepare("SELECT * FROM etudiant WHERE email = ? AND mdp = ?");

        $req->execute([$pseudo, $mdp]);

        $result = $req->fetch(PDO::FETCH_OBJ);
        if ($result) {
            if ($result->archive == 1) {
                session_start();
                $_SESSION['etudiant'] = $result;
                header('Location:pages/etudiant.php');
            } else {
                $error =  "votre compte a été bloqué !";
            }
        } else {
            $error = "les donnees sont fausses";
        }
    } else {
        $error = "veuillez remplir tous les champs";
    }
}
