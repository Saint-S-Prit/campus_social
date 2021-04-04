<?php
include_once('../modeles/etudiant.php');
$roles = role();

var_dump($_SESSION['etudiant']);


if (isset($_POST['submit'])) {

    $prenom = strip_tags($_POST['prenom']);
    $nom = strip_tags($_POST['nom']);
    $pseudo = strip_tags($_POST['pseudo']);
    $mdp = strip_tags($_POST['mdp']);
    $statut = strip_tags($_POST['statut']);

    if (!empty($prenom) && !empty($nom) && !empty($pseudo) && !empty($mdp) && !empty($statut)) {
        add($prenom, $nom, $pseudo, $mdp, $statut);
    }
}
?>

<div class="card-header ">
    <h5 class="card-title">Ecrire un message</h5>
    <p class="card-category">votre message sera transmet au agent social </p>
</div>
<form method="POST">
    <div class="form-group">
        <label for="formGroupExampleInput">Votre email</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=" votre email" name="email" value="<?= $_SESSION['etudiant']->email; ?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Message</label>
        <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="ecrire votre message"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Creer</button>

    </div>



</form>