<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$allMessage = findAll();

foreach ($allMessage as $message) {

    $etudiant = etudiant($message['etudiant_id']);
    $etudiant = $etudiant[0];

    //var_dump($etudiant);
?>
    <main role="main" class="container">
        <h3 class="mt-5"><?php echo $message['email']; ?></h3>
        <p class="lead"><?php echo $message['contenu']; ?></p>
        <p>Envoyer <a href="../sticky-footer-navbar/">the sticky footer with a fixed navbar</a> par <?php echo $etudiant['prenom']; ?></p>
        <hr>
    </main>
<?php
}
