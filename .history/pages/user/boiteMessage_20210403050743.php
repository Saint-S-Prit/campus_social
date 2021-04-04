<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();

var_dump(count($nbr_message_non_lu));


for ($i = 1; $i < count($nbr_message_non_lu); $i++) {
    echo $nbr_message_non_lu;
}
