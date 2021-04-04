<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();



Sticky footer
Attach a footer to the bottom of the viewport when page content is short.




echo "<pre>";
print_r($nbr_message_non_lu);
echo "</pre>";
