<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();
var_dump($nbr_message_non_lu);
echo "<br><br>";
$tab = json_decode(json_encode($nbr_message_non_lu), true);
foreach ($tab as $collection) {

    $infoEtudiant = getInfoEtudiant($collection[$etudiant_id]);
?>
    <main role="main" class="container">
        <h3 class="mt-5"><?php echo $collection['email']; ?></h3>
        <p class="lead"><?php echo $collection['contenu']; ?></p>
        <p class="lead"><?php echo $infoEtudiant->prenom; ?></p>
        <p>Envoyer <a href="../sticky-footer-navbar/">the sticky footer with a fixed navbar</a> if need be, too.</p>
    </main>
<?php
}
