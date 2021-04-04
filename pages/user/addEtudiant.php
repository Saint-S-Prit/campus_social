<?php

$social = true;

$roles = role();

if (isset($_POST['submit'])) {

    $prenom = strip_tags($_POST['prenom']);
    $nom = strip_tags($_POST['nom']);
    $email = strip_tags($_POST['email']);
    $genre = strip_tags($_POST['genre']);
    $codifier = strip_tags($_POST['codifier']);



    $mdp = new \DateTime;

    $opt1 = strtoupper(str_shuffle($mdp->format('day')));
    $opt2 = strtoupper($mdp->format('Y'));
    $opt3 = strtoupper(substr($genre, 0, 1));
    $mdp = $opt1 . "" . $opt2 . "" . $opt3;
    $mdp = str_shuffle($mdp);

    $id = strip_tags($_POST['identifiant_id']);
    if (!empty($prenom) && !empty($nom) && !empty($email) && !empty($genre) && !empty($codifier)) {
        if (!empty($id)) {
            EditeEtudiantById($prenom, $nom, $email, $mdp, $genre, $codifier, $id);
            $valide =  "votre requête est valide ";
        } else {
            add($prenom, $nom, $email, $mdp, $genre, $codifier);
            $valide =  "votre requête est valide ";
        }
    } else {
        $error =  "veuillez remplir tous les champs";
    }
}


if (isset($_GET['idEtudiant'])) {
    $id = strip_tags($_GET['idEtudiant']);
    $etudiant = findOneById($id);
    $etudiant = $etudiant[0];
    $edite = "modifier l'utilisateur ";
}


?>




<div class="card-header ">
    <h5 class="card-title">
        <?php if (@$edite) {
            echo $edite;
        } else {
            echo  "Ajouter un nouveau utilisateur";
        }
        ?>
    </h5>
    <p class="card-category">nous ne pouvez qu'ajouter un ajent social ou un ajent comptble</p>
</div>
<form method="POST">

    <?php if (@$error) {
        echo "<span style=color:red>" . $error . "</span>";
    }
    if (@$valide) {
        echo "<span style=color:green>" . $valide . "</span>";
    }
    ?>
    <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="prenom" name="identifiant_id" value="<?php echo @$etudiant->id; ?>">
    <div class="form-group">
        <label for="formGroupExampleInput">Prenom</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="prenom" name="prenom" value="<?php echo @$etudiant->prenom; ?>">
    </div>
    <div class=" form-group">
        <label for="formGroupExampleInput">Nom</label>
        <input type="text" name="nom" class="form-control" id="formGroupExampleInput" value="<?php echo @$etudiant->nom; ?>">
    </div>
    <div class=" form-group">
        <label for="formGroupExampleInput">email</label>
        <input type="text" name="email" class="form-control" id="formGroupExampleInput" value="<?php echo @$etudiant->email; ?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Genre</label>
    </div>
    <select name="genre" class="custom-select" id="inputGroupSelect01">
        <option value="homme">homme</option>
        <option value="femme">femme</option>
    </select>


    <div class="input-group-prepend">
        <label for="formGroupExampleInput2">Codifier</label>
    </div>
    <select name="codifier" class="custom-select">
        <option value="oui">oui</option>
        <option value="non">non</option>
    </select>
    <button type="submit" class="btn btn-primary" name="submit">Creer</button>

    </div>
</form>