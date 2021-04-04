<?php
require_once('../modeles/etudiant.php');

if (isset($_GET['p']) == "condifier") {
    $etudiants = codification("oui");
    $effetctif = count($etudiants);
}
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
    <div class="col-md-8 main">
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
                                    <button class="btn btn-primary" class="form-control" style="margin-top: 1px;">RECHERCHE</button>
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

            for ($i = 0; $i < $effetctif; $i++) {
                if (isset($etudiants[$i])) {
                    $item = $etudiants[$i];
                    if ($site == 1) {
                        $site = "Hôtel du rail";
                    } elseif ($site == 2) {
                        $site = "VCN";
                    }

                    if ($item->pavillon_id  == 3) {
                        $item->pavillon_id  = "a";
                        $item->site = "VCN";
                    } elseif ($item->pavillon_id  == 2) {
                        $item->pavillon_id  = "d";
                        $item->site = "Hôtel du rail";
                    } elseif ($item->pavillon_id  == 1) {
                        $item->pavillon_id  = "c";
                        $item->site = "Hôtel du rail";
                    } elseif ($item->pavillon_id  == 4) {
                        $item->pavillon_id  = "b";
                        $item->site = "VCN";
                    }




        ?>
                    <div class="col-md-12">
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading"><?= $item->prenom . ' ' . $item->nom  ?></h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Sexe <span><?= $item->genre ?></span></li>
                                    <li>compte <span><?= $retVal = ($item->archive == 1) ? $item->mdp : "compte bloqué"; ?></span></li>
                                    <li>Email <span><a><?= $item->email ?></a></span></li>

                                    <div class="row" style="text-align:center">
                                        <div class="col-8">
                                            <li>Site <span><a><?= strtoupper($item->site) ?></a></span></li>
                                            <li>Pavillon <span><a><?= strtoupper($item->pavillon_id) ?></a></span></li>
                                            <li>Chambre <span><a><?= $item->chambre ?></a></span></li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <hr>
                        </div>
                    </div>
            <?php

                }
            }
        } else {
            $recherche = $_POST['recherche'];
            $item = codificationItem($recherche);

            var_dump($item);

            ?>
            <div class="col-md-12">
                <div class="profile-detail">
                    <div class="profile-info">
                        <h4 class="heading"><?= $item->prenom . ' ' . $item->nom  ?></h4>
                        <ul class="list-unstyled list-justify">
                            <li>Sexe <span><?= $item->genre ?></span></li>
                            <li>compte <span><?= $retVal = ($item->archive == 1) ? $item->mdp : "compte bloqué"; ?></span></li>
                            <li>Email <span><a><?= $item->email ?></a></span></li>

                            <div class="row" style="text-align:center">
                                <div class="col-8">
                                    <li>Site <span><a><?= strtoupper($item->site) ?></a></span></li>
                                    <li>Pavillon <span><a><?= strtoupper($item->pavillon_id) ?></a></span></li>
                                    <li>Chambre <span><a><?= $item->chambre ?></a></span></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <hr>
                </div>
            </div>

        <?php
        }

        ?>

    </div>



</div>