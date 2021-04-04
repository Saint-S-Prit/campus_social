<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$allMessage = findAll();

foreach ($allMessage as $message) {

    $etudiant = getInfoEtudiant($message['etudiant_id']);


    $tabEtudiant = json_decode(json_encode($etudiant), true);

    var_dump($tabEtudiant);
?>
    <main role="main" class="container">
        <h3 class="mt-5"><?php echo $message['email']; ?></h3>
        <p class="lead"><?php echo $message['contenu']; ?></p>
        <p>Envoyer <a href="../sticky-footer-navbar/">the sticky footer with a fixed navbar</a> par <?php echo $tabEtudiant['']; ?></p>
    </main>
<?php
}
