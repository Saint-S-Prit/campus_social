<?php

?>
<!-- PROFILE DETAIL -->

<style>
    .main {
        margin: 0 auto;
    }

    span {
        float: right;
    }

    .heading {
        color: #42B5B9;
    }
</style>


<div class="row">
    <div class="col-md-12 main">
        <div class="col-md-12">
            <div class="profile-detail">
                <div class="profile-info">
                    <h4 class="heading">recherche d'un etudiant</h4>
                    <form action="" method="POST">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="recherche" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary" class="form-control" style="margin-top: 1px;"><i class="fa fa-search" aria-hidden="true"></i> RECHERCHE</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>

        <hr>


        <?php

        if (!($_POST)) {

            if (isset($_GET['p']) == "recherche-codifier") {
                $etudiants = codification("oui");
                $effetctif = count($etudiants);
            }



        ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Compte</th>
                        <th scope="col">Email</th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Site</th>
                        <th scope="col">Pavillon</th>
                        <th scope="col">Chambre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    for ($i = 0; $i < $effetctif; $i++) {
                        if (isset($etudiants[$i])) {
                            $item = $etudiants[$i];

                            $item = SiteEtPavillonCorrespond($item);

                    ?>

                            <tr style="font-size: 14px;">
                                <td scope="col"><?= $item->prenom; ?></td>
                                <td scope="col"><?= $item->nom; ?></td>
                                <td scope="col"><?= $item->genre; ?></td>
                                <td scope="col"><?= $retVal = ($item->archive == 1) ? $item->mdp : "compte bloqué"; ?></td>
                                <td scope="col"><?= $item->email ?></td>
                                <td scope="col"><?= $item->mdp; ?></td>
                                <td scope="col"><?= $item->site; ?></td>
                                <td scope="col"><?= $item->pavillon_id ?></td>
                                <td scope="col"><?= $item->chambre ?></td>
                            </tr>
                    <?php

                        }
                    }

                    ?>
                </tbody>
            </table>

        <?php
        } else {
            $recherche = $_POST['recherche'];
            $item = codificationItem($recherche);
            $item = $item[0];

            $item = SiteEtPavillonCorrespond($item);

        ?>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Compte</th>
                        <th scope="col">Email</th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Site</th>
                        <th scope="col">Pavillon</th>
                        <th scope="col">Chambre</th>
                    </tr>
                </thead>
                <tbody>
                    <td scope="col"><?= $item->prenom; ?></td>
                    <td scope="col"><?= $item->nom; ?></td>
                    <td scope="col"><?= $item->genre; ?></td>
                    <td scope="col"><?= $retVal = ($item->archive == 1) ? $item->mdp : "compte bloqué"; ?></td>
                    <td scope="col"><?= $item->email ?></td>
                    <td scope="col"><?= $item->mdp; ?></td>
                    <td scope="col"><?= $item->site; ?></td>
                    <td scope="col"><?= $item->pavillon_id ?></td>
                    <td scope="col"><?= $item->chambre ?></td>
                </tbody>
            </table>

        <?php
        }

        ?>

    </div>



</div>