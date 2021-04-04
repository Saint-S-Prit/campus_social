<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();
$nbr_message_non_lu = $nbr_message_non_lu;


for ($i = 0; $i < count($nbr_message_non_lu); $i++) {
    foreach ($nbr_message_non_lu as $val) {
        var_dump($val);
    }

    echo "<br><br>";
}
