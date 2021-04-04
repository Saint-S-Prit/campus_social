<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$allMessage = findAll();

foreach ($allMessage as $message) {
    var_dump($message);
}
