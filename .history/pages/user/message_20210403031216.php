<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();



if (isset($_POST['submit'])) {
    $email = strip_tags($_POST['email']);
    $contenu = strip_tags($_POST['contenu']);
    $etudiant_id = (int)$_SESSION['etudiant']->id;
    if (!empty($email) && !empty($contenu)) {
        message($email, $contenu, $etudiant_id);
    } else {
        $error = "Veuillez ecrie votre message";
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
        <textarea class="form-control" name="contenu" id="" cols="30" rows="10" placeholder="ecrire votre message"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Creer</button>

    </div>



</form>