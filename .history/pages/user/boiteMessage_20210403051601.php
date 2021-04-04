<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();


for ($i = 0; $i < count($nbr_message_non_lu); $i++) {
    foreach ($nbr_message_non_lu[$i] as $val) {
        var_dump($val[0]->email);
    }

    echo "<br><br>";
}
