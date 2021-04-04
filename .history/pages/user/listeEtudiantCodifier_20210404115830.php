<?php
if (isset($_GET['p'])) {
    require_once('../modeles/etudiant.php');

    $etudiants = codification("oui");

    $effetctif = count($etudiants);
}
?>
<!-- PROFILE DETAIL -->

<style>
    span {
        float: right;
    }
</style>
<div class="row">
    <div class="col-md-6">
        <div class="col-md-12">
            <div class="profile-detail">
                <div class="profile-info">
                    <h4 class="heading">recherche d'un etudiant</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="formGroupExampleInput">Etat</label>
                                    <input type="text" name="recherche" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary" type="submit" name="submit" style="margin-top: 25px;">recherche</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>


        <?php

        for ($i = 0; $i < $effetctif; $i++) {
            if (isset($etudiants[$i])) {
                $item = $etudiants[$i];

        ?>
                <div class="col-md-12">
                    <div class="profile-detail">
                        <div class="profile-info">
                            <h4 class="heading"><?= $item->prenom . '' . $item->nom  ?></h4>
                            <ul class="list-unstyled list-justify">
                                <li>Sexe <span><?= $item->genre ?></span></li>
                                <li>compte <span><?= $retVal = ($item->archive == 1) ? $item->mdp : "compte bloqué"; ?></span></li>
                                <li>Email <span><a href="https://www.themeineed.com">www.themeineed.com</a></span></li>
                                <li>codifier <span>samuel@mydomain.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
        <?php

            }
        }

        ?>

    </div>



</div>