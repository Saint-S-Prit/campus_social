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

            for ($i = 0; $i < $effetctif; $i++) {
                if (isset($etudiants[$i])) {
                    $item = $etudiants[$i];

                    $item = SiteEtPavillonCorrespond($item);

        ?>
                    <div class="col-md-12 card card-stats" style="border-bottom: 1px solid aqua;border-left: 1px solid aqua;">
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading"><?= $item->prenom . ' ' . $item->nom  ?></h4>
                                <ul class="">
                                    <li>Sexe <span><?= $item->genre ?></span></li>
                                    <li>compte <span><?= $retVal = ($item->archive == 1) ? $item->mdp : "compte bloqué"; ?></span></li>
                                    <li>Email <span><a><?= $item->email ?></a></span></li>

                                    <div class="row">
                                        <div class="col-8">
                                            <li>Site <span><a><?= strtoupper($item->site) ?></a></span></li>
                                            <li>Pavillon <span><a><?= strtoupper($item->pavillon_id) ?></a></span></li>
                                            <li>Chambre <span><a><?= $item->chambre ?></a></span></li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
            <?php

                }
            }
        } else {
            $recherche = $_POST['recherche'];
            $item = codificationItem($recherche);
            $item = $item[0];

            $item = SiteEtPavillonCorrespond($item);

            ?>
            <div class="col-md-12" card card-stats" style="border-bottom: 1px solid aqua;border-left: 1px solid aqua;">
                <div class="profile-detail">
                    <div class="profile-info">
                        <h4 class="heading"><?= $item->prenom . ' ' . $item->nom  ?></h4>
                        <ul class="">
                            <li>Sexe :<?= $item->genre ?></li>
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
                </div>
            </div>

        <?php
        }

        ?>

    </div>



</div>