<?php
include_once('database.php');

function message($email, $message, $etudiant_id)
{
    global $pdo;
    $insertion = $pdo->prepare("INSERT INTO message_etudiant (email, contenu, etudiant_id) VALUES ?,?,? ");
    $insertion->execute([$email, $contenu, $etudiant_id]);
}
