<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();

foreach ($tab as $collection) {
    $infoEtudiant = getInfoEtudiant($collection['etudiant_id']);
    $tabEtudiant = json_decode(json_encode($infoEtudiant), true);
    var_dump($tabEtudiant[0]->prenom);
?>
    <main role="main" class="container">
        <h3 class="mt-5"><?php echo $collection['email']; ?></h3>
        <p class="lead"><?php echo $collection['contenu']; ?></p>
        <p>Envoyer <a href="../sticky-footer-navbar/">the sticky footer with a fixed navbar</a> par <?php echo $tabEtudiant['']; ?></p>
    </main>
<?php
}
