<?php
if (isset($_GET['codifier'])) {
    $id = strip_tags($_GET['codifier']);
    require_once('../modeles/etudiant.php');
    $etudiants = codification($codifier == "oui");

    var_dump($etudiants);
    die();
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
                        <th>
                            Sexe
                        </th>
                        <th>
                            Ufr
                        </th>
                        <th>
                            Site
                        </th>
                        <th>
                            Pavillon
                        </th>
                        <th>
                            N°:Chambre
                        </th>
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
                                    <td>
                                        <?= $etudiant->genre; ?>
                                    </td>

                                    <td>
                                        <?= $etudiant->ufr; ?>
                                    </td>
                                    <td>
                                        <?= $etudiant->site; ?>
                                    </td>
                                    <td>
                                        <?= $etudiant->pavillon; ?>
                                    </td>
                                    <td>
                                        <?= $etudiant->chambre; ?>
                                    </td>


                                </tr>
                        <?php
                            }
                        }

                        ?>
                    </tbody>
                </table>