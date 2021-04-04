<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();


for ($i=1; $i < count($nbr_message_non_lu); $i++) { 
   foreach ($nbr_message_non_lu[i] as $value) {
       echo $value->email;
       echo "<br>";
       echo $value->message_etudiant;
   }
}

Sticky footer
Attach a footer to the bottom of the viewport when page content is short.


