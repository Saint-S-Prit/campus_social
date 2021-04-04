<?php
if (isset($_GET['codifier'])) {
    $id = strip_tags($_GET['codifier']);
    require_once('../modeles/etudiant.php');
    deleteEtudiantById($id);
}



?>

<div class="col-md-12">
    <div class="card card-plain">
        <div class="card-header">
            <h4 class="card-title">liste des etudiants codifier</h4>
            <p class="card-category">information des étudiants codifier</p>
        </div>


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
                                            <?php
                                            if (isset($etudiant->archive) && $etudiant->archive == 1) {
                                            ?>
                                                <a href="social.php?p=list&detele=<?= $etudiant->id; ?>"><i class="fa fa-user" aria-hidden="true"></i></a>
                                            <?php
                                            } elseif (isset($etudiant->archive) && $etudiant->archive == 0) {
                                            ?>
                                                <a href="social.php?p=list&detele=<?= $etudiant->id; ?>"><i style="color: red;" class="fa fa-lock" aria-hidden="true"></i></a>

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