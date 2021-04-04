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


    // $id = $_GET['etudiant_id'];


    // $req = $pdo->query("SELECT * FROM etudiant WHERE id = $id");
    // $resul = $req->fetchAll(PDO::FETCH_OBJ);

    // if (empty($resul[0]->chambre)) {
    //     $_SESSION['etudiant'] = $resul;
    //     $_SESSION['etudiant'][0]->id = (int)$_SESSION['etudiant'][0]->id;
    //     $_SESSION['etudiant'] = $_SESSION['etudiant'][0];


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
                echo  'Erreur de la base de données';
            } else {

                var_dump($_POST);
                die();

                $prenom = $_SESSION['etudiant']->prenom;
                $nom = $_SESSION['etudiant']->nom;
                $valide = "demande effectuée avec succées!<br>l'étudiant " . $prenom . " " . $nom .
                    "<br> dans deans le pavillion " . $pavillon . " et dans la chambre " . $chambre;
            }
        }
    } else {
        echo "veuillez remplir le UFR";
    }
    // } else {
    //     $chambre = $resul[0]->chambre;
    //     $pavillon = $resul[0]->pavillon_id;
    //     if ($pavillon = 1) {
    //         $pavillon = 'c';
    //     } elseif ($pavillon = 2) {
    //         $pavillon = 'd';
    //     } elseif ($pavillon = 3) {
    //         $pavillon = 'a';
    //     } elseif ($pavillon = 4) {
    //         $pavillon = 'b';
    //     }
    //     echo  "cet étudiant a déja codifié <br>
    //         pavillon : " . $pavillon . " et dans la chambre " . $chambre;
    // }
}
?>


<p style="text-align: center;color:red; font-weight:bolder">
    <?php echo @$error; ?>
</p>
<div class="card-header ">
    <h5 class="card-title">Infos</h5>
    <p class="card-category">Renseigner vos informations</p>
</div>
<form method="POST">
    <select name="ufr" class="custom-select" id="inputGroupSelect01">
        <option selected>choix...</option>
        <option value="set">SET</option>
        <option value="si">SI</option>
        <option value="ses">SES</option>
        <option value="iut">IUT</option>
    </select>
    <input type="hidden" class="form-control" id="formGroupExampleInput" value="<?php echo @$_SESSION['etudiant']->genre; ?>" name="genre">

    <button type="submit" class="btn btn-primary" name="submit">Soumettre</button>

    </div>
</form>