<?php
include_once('database.php');

function message($email, $message, $etudiant_id)
{
    global $pdo;
    $insertion = $pdo->prepare("INSERT INTO notific")
}
