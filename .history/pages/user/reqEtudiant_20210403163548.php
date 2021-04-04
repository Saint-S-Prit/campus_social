<?php
require('../modeles/etudiant.php');

function getPavillonChambre($sexe, $array, $ufr)
{
    $array['pavillon'] = $sexe == 'femme' ? 2 : 1;
    if ($ufr == "set") {
        $array['chambre'] = rand(1, 10);
    } elseif ($ufr == "si") {
        $array['chambre'] = rand(11, 20);
    } else {
        $array['chambre'] = rand(21, 30);
    }

    return $array;
}

if (isset($_POST['submit'])) {
    extract($_POST);
    if (!empty($ufr) && !empty($genre)) {
        $tab = [];
        $tab['id'] = (int)$_SESSION['etudiant']->id;
        $tab['ufr'] = $ufr;
        $tab['sexe'] = $genre;
        if ($ufr !== "ses") {
            $tab['site'] = 1;
            $tab = getPavillonChambre($genre, $tab, $ufr);
        } else {
            $tab['site'] = 2;
            $tab['pavillon'] = $genre == 'femme' ? 4 : 3;
            $tab['chambre'] = rand(1, 38);
        }
        extract($tab);

        include_once('../modeles/database.php');


        $req = $pdo->query("SELECT * FROM etudiant WHERE pavillon_id = $pavillon AND chambre = $chambre");
        $effectif = count($req->fetchAll(PDO::FETCH_OBJ));
        if (($site == 1 && (($genre == "homme" && $effectif > 14) || ($genre == "femme" && $effectif > 6))) || ($site == 2 && $effectif > 2)) {
            echo "sur effectif";
        } else {
            global $pdo;
            $req = $pdo->prepare("UPDATE etudiant SET chambre = :chambre , pavillon_id = :pavillon WHERE id= :id");
            $req->bindValue('id', $id);
            $req->bindValue('pavillon', $pavillon);
            $req->bindValue('chambre', $chambre);
            if (!$req->execute()) {
                var_dump('lgnflkgnfod');
                $error =  'Erreur de la base de données';
            } else {

                $prenom = $_SESSION['etudiant']->prenom;
                $nom = $_SESSION['etudiant']->nom;
                $valide = "demande effectuée avec succées!<br>l'étudiant " . $prenom . " " . $nom .
                    "<br> dans deans le pavillion " . $pavillon . " et dans la chambre " . $chambre;
            }
        }
    } else {
        $error = "veuillez remplir le UFR";
    }
}
?>


<?php if ($error) {
    echo $error;
}
if ($valide) {
    echo $valide;
}
?>
<div class="card-header ">
    <h5 class="card-title">Infos</h5>
    <p class="card-category">Renseigner vos informations</p>
</div>
<form method="POST">
    <select name="ufr" class="custom-select" id="inputGroupSelect01">
        <option value="set">SET</option>
        <option value="si">SI</option>
        <option value="ses">SES</option>
        <option value="iut">IUT</option>
    </select>
    <input type="hidden" class="form-control" id="formGroupExampleInput" value="<?php echo @$_SESSION['etudiant']->genre; ?>" name="genre">

    <button type="submit" class="btn btn-primary" name="submit">Soumettre</button>

    </div>
</form>