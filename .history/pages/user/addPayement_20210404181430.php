<?php
require('../modeles/mensualite.php');

if (isset($_POST['submit'])) {
    $mois = strip_tags($_POST['mois']);
    $statut = strip_tags($_POST['statut']);

    if ($mois == "choix" or $statut == "statut") {
        $error  = "vous devez faire les choix de filtre ";
    } else {
        $etudiant_id = strip_tags($_POST['etudiant_id']);
        $reqOk  = add($mois, $statut, $etudiant_id);

        if ($reqOk) {
            $valide = "transaction effectuée !";
        } else {
            $error =  "l'identifiant n'existe pas !";
        }
    }
}
?>


<h4 class="card-title">liste des etudiants</h4>
<p class="card-category">voici la liste de tous les etudiants</p>

<?php if ($error) {
    echo "<span style=color:red>" . $error . "</span>";
}
if ($valide) {
    echo "<span style=color:green>" . $valide . "</span>";
}
?>
<form method="POST">
    <div class="form-group">
        <label for="formGroupExampleInput">Nom</label>
        <select name="mois" class="custom-select" id="inputGroupSelect01">
            <option value="choix">choix</option>
            <option value="janvier">janvier</option>
            <option value="février">février</option>
            <option value="mars">mars</option>
            <option value="avril">avril</option>
            <option value="mai">mai</option>
            <option value="juin">juin</option>
            <option value="Juillet">Juillet</option>
            <option value="aout">aout</option>
            <option value="septembre">septembre</option>
            <option value="octobre">octobre</option>
            <option value="novembre">novembre</option>
            <option value="descembre">descembre</option>
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Payer</label>
        <select name="statut" class="custom-select" id="inputGroupSelect01">
            <option value="choix">choix</option>
            <option value="payer">payer</option>
            <option value="non_payer">non payer</option>
        </select>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Identifiant</label>
        <input type="text" name="etudiant_id" class="form-control" id="formGroupExampleInput" placeholder="Identifiant">
    </div>


    <input type="submit" value="enregistrer" name="submit">


</form>