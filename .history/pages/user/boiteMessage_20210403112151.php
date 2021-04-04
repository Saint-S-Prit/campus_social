<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$allMessage = findAll();

if (isset($_GET['idEtudiant'])) {
    $id = strip_tags($_GET['idEtudiant']);
    $id = (int)$id;
    updateMessage($id);
}
foreach ($allMessage as $message) {

    $etudiant = etudiant($message['etudiant_id']);
    $etudiant = $etudiant[0];

    //var_dump($etudiant);
?>
    <main role="main" class="container">
        <h4 class="mt-5"><?php echo $message['email']; ?></h4>
        <p class="lead"><?php echo $message['contenu']; ?></p>
        <p>Envoyer <a href="../sticky-footer-navbar/">par <?php echo $etudiant['prenom']; ?></a></p>
        <a href="social.php?p=messagelu&idEtudiant=<?php echo $etudiant['id']; ?>"><?php if ($message['archive'] == 1) {
                                                                                        echo "<span style='color:red;'>non lu</span>";
                                                                                    } else {
                                                                                        echo "<i class='nc-icon nc-check-2'></i>lu";
                                                                                    }
                                                                                    ?></a>
        <hr>
    </main>

<?php
}
