<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();


for ($i = 1; $i < count($nbr_message_non_lu[0]); $i++) {
    echo $nbr_message_non_lu;
}
