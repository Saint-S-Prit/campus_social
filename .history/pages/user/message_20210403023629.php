<?php
include_once('../modeles/admin.php');
$roles = role();

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
        <label for="formGroupExampleInput">Prenom</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="prenom" name="prenom">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Nom</label>
        <input type="text" name="nom" class="form-control" id="formGroupExampleInput" placeholder="nom">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">pseudo</label>
        <input type="text" class="form-control" name="pseudo" id="formGroupExampleInput" placeholder="identifiant">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">password</label>
        <input type="password" class="form-control" name="mdp" id="formGroupExampleInput2" placeholder="Another input">
    </div>

    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Statut</label>
    </div>
    <select name="statut" class="custom-select" id="inputGroupSelect01">
        <option selected>choix...</option>

        <?php
        foreach ($roles as $role) {
        ?>
            <option value=<?= $role->libelle; ?>> <?= $role->libelle; ?></option>
        <?php
        }
        ?>
    </select>
    <button type="submit" class="btn btn-primary" name="submit">Creer</button>

    </div>



</form>