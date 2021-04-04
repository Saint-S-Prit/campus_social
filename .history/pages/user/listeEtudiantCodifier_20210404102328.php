<?php
if (isset($_GET['p'])) {
    require_once('../modeles/etudiant.php');

    $etudiants = codification($codifier == "oui");

    var_dump($etudiants);
    die();
}
