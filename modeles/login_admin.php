<?php

include_once('database.php');

if (isset($_POST['login'])) {
    $pseudo = strip_tags($_POST['pseudo']);
    $mdp = strip_tags($_POST['mdp']);

    if (!empty($pseudo) && !empty($mdp)) {

        $req = $pdo->prepare("SELECT * FROM user WHERE pseudo = ? AND mdp = ?");

        $req->execute([$pseudo, $mdp]);

        $result = $req->fetch(PDO::FETCH_OBJ);
        if ($result) {
            if ($result->archive == 1) {
                session_start();
                $statut = $result->statut;
                switch ($statut) {
                    case 'admin':
                        $_SESSION['admin'] = $result;
                        header('Location:pages/admin.php');
                        break;
                    case 'social':
                        $_SESSION['social'] = $result;
                        header('Location:pages/social.php');
                        break;
                    case 'comptable':
                        $_SESSION['comptable'] = $result;
                        header('Location:pages/comptable.php');
                        break;
                    case 'etudiant':
                        $_SESSION['etudiant'] = $result;
                        header('Location:pages/etudiant.php');
                        break;

                    default:
                        require_once('login.php');
                        break;
                }
            } else {
                $error = "Ce compte a été bloqué !";
            }
        } else {
            $error = "les donnees sont fausses";
        }
    } else {
        $error = "Veuillez remplir tous les champs";
    }
}
