<?php
if (isset($_GET['p'])) {
    require_once('../modeles/etudiant.php');

    $etudiants = codification("oui");

    $effetctif = count($etudiants);

    var_dump($etudiants[]);



    die();
}
