<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();
var_dump(extract($nbr_message_non_lu));


for ($i = 0; $i < count($nbr_message_non_lu); $i++) {
    foreach ($nbr_message_non_lu as $val) {
    }

    echo "<br><br>";
}
