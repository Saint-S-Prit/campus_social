<?php
require_once('../modeles/etudiant.php');
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


        <div class="col-lg-4 col-md-6 col-sm-6">

            <?php


            if (!($_POST)) {

                if (isset($_GET['p']) == "condifier") {
                    $etudiants = codification("oui");
                    $effetctif = count($etudiants);
                }

                for ($i = 0; $i < $effetctif; $i++) {
                    if (isset($etudiants[$i])) {
                        $item = $etudiants[$i];

                        $item = SiteEtPavillonCorrespond($item);

            ?>

                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning" style="color: #6BD098;">
                                            <h4 class="heading"><?= $item->prenom . ' ' . $item->nom  ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category"><?= $item->genre ?></p>
                                            <p class="card-category"><span><?= $retVal = ($item->archive == 1) ? $item->mdp : "compte bloqué"; ?></span></p>
                                            <p class="card-category"><?= $item->email ?></p>

                                            <ul>
                                                <li>Site <span><a><?= strtoupper($item->site) ?></a></span></li>
                                                <li>Pavillon <span><a><?= strtoupper($item->pavillon_id) ?></a></span></li>
                                                <li>Chambre <span><a><?= $item->chambre ?></a></span></li>
                                            </ul>

                                        </div>
                                    </div>
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
        </div>



            }

?>






</div>