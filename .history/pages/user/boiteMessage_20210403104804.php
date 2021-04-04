<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$allMessage = findAll();



var_dump($_GET['']);

foreach ($allMessage as $message) {

    $etudiant = etudiant($message['etudiant_id']);
    $etudiant = $etudiant[0];

    //var_dump($etudiant);
?>
    <main role="main" class="container">
        <h4 class="mt-5"><?php echo $message['email']; ?></h4>
        <p class="lead"><?php echo $message['contenu']; ?></p>
        <p>Envoyer <a href="../sticky-footer-navbar/">the sticky footer with a fixed navbar</a> par <?php echo $etudiant['prenom']; ?></p>
        <a href="social.php?p=messagelu&?idEtudiant=<?php echo $etudiant['id']; ?>"><?php if ($message['archive'] == 1) {
                                                                                        echo "non lu";
                                                                                    } else {
                                                                                        echo "lu";
                                                                                    }
                                                                                    ?></a>
        <hr>
    </main>

<?php
}
