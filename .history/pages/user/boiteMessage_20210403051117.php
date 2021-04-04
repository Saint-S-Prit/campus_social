<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();



foreach ($nbr_message_non_lu[$i] as $value) {
    for ($i = 1; $i < count($nbr_message_non_lu); $i++) {
        echo $value->email;
        echo "<br>";
        echo $value->message_etudiant;
    }
}
