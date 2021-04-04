<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();
$tab = json_decode(json_encode($nbr_message_non_lu), true);
var_dump($nbr_message_non_lu);
