<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();


for ($i=0; $i < count($nbr_message_non_lu); $i++) { 
    # code...
}

Sticky footer
Attach a footer to the bottom of the viewport when page content is short.


