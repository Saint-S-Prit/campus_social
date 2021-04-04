<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();








echo "<pre>";
print_r(extract($nbr_message_non_lu));
echo "</pre>";
