<?php
if (isset($_GET['p'])) {
    require_once('../modeles/etudiant.php');

    $etudiants = codification("oui");

    $effetctif = count($etudiants);


    for ($i = 0; $i < $effetctif; $i++) {
        if (isset($etudiants[$i])) {
            $item = $etudiants[$i];
            var_dump($etudiants[$item]);
            echo "<hr>";
        }
    }



    die();
}
