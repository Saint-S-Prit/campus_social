<?php
if (isset($_GET['p'])) {
    $id = strip_tags($_GET['codifier']);
    require_once('../modeles/etudiant.php');
    $etudiants = codification($codifier == "oui");

    var_dump($etudiants);
    die();
}
