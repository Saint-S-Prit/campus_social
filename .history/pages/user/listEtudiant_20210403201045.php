<?php

if (isset($_POST['submit'])) {
    $mois  = strip_tags($_POST['mois']);
    $statut  = strip_tags($_POST['statut']);
    require('../modeles/mensualite.php');
    $etudiants = listEtudiantByMois($mois, $statut);
} else {
    require_once('../modeles/etudiant.php');
    $etudiants = lister();
}

if (isset($_GET['detele'])) {
    $id = strip_tags($_GET['detele']);
    require_once('../modeles/etudiant.php');
    deleteEtudiantById($id);
}

if (isset($_GET['edite'])) {
    $id = strip_tags($_GET['edite']);
}


?>

<div class="col-md-12">
    <div class="card card-plain">
        <div class="card-header">
            <h4 class="card-title">liste des etudiants</h4>
            <p class="card-category">voici la liste de tous les etudiants</p>
        </div>

        <form action="" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="formGroupExampleInput">Mois</label>
                        <select name="mois" class="custom-select" id="inputGroupSelect01">
                            <option selected>choix...</option>
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
                    <div class="col-md-4">
                        <label for="formGroupExampleInput">Etat</label>
                        <select name="statut" class="custom-select" id="inputGroupSelect01">
                            <option selected>choix...</option>
                            <option value="payer">payer</option>
                            <option value="non_payer">pas a jour</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit" name="submit" style="margin-top: 25px;">Lister</button>
                    </div>
                </div>

            </div>

        </form>
        <div class="card-body">
            <div class="Formlister" style="margin: 0 ">

                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Prenom
                        </th>
                        <th>
                            Nom
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Identifiant
                        </th>
                        <th class="text-right">
                            Codifier
                        </th>
                        <?php if ($social) {
                        ?>
                            <th>
                                supprimer
                            </th>
                            <th>
                                modifier
                            </th>
                            <th>
                                codifier
                            </th>
                        <?php

                        } ?>
                    </thead>
                    <tbody>


                        <?php
                        if ($etudiants) {
                            foreach ($etudiants as $etudiant) {
                        ?>
                                <tr style="text-align: center;">
                                    <td>
                                        <?= $etudiant->prenom; ?>
                                    </td>
                                    <td>
                                        <?= $etudiant->nom; ?>
                                    </td>
                                    <td>
                                        <?= $etudiant->email; ?>
                                    </td>
                                    <td>
                                        <?= $etudiant->mdp; ?>
                                    </td>
                                    <td class="text-right">
                                        <?=
                                        $etudiant->codifier
                                        ?>
                                    </td>
                                    <?php if ($social) {

                                    ?>
                                        <td>
                                            <a href="social.php?p=list&detele=<?= $etudiant->id; ?>">
                                                <?php
                                                if (isset($etudiant->archive) && $etudiant->archive == 1) {
                                                ?>
                                                    <a href="social.php?p=codifier&etudiant_id=<?= $etudiant->id; ?>"><i class="fa fa-bed" aria-hidden="true"></i></a>
                                                <?php
                                                } elseif (isset($etudiant->archive) && $etudiant->archive == 0) {
                                                    echo "j";
                                                ?>
                                                <?php
                                                }
                                                ?>
                                            </a>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <a href="social.php?p=edite&idEtudiant=<?= $etudiant->id; ?>"><i class="fas fa-user-check"></i></a>
                                        </td>
                                        <td>
                                            <a href="social.php?p=codifier&etudiant_id=<?= $etudiant->id; ?>"><i class="fa fa-bed" aria-hidden="true"></i></a>
                                        </td>
                                    <?php

                                    } ?>

                                </tr>

                        <?php
                            }
                        } else {
                            echo "Pas de resultat";
                        }


                        ?>


                    </tbody>
                </table>