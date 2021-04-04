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
            echo $item->prenom . ' ' . $item->nom;
            echo "<hr>";
        }
    }

    ?>

    <div class="col-md-6">
        <div class="profile-detail">
            <div class="profile-info">
                <h4 class="heading">profil</h4>
                <ul class="list-unstyled list-justify">
                    <li>Birthdate <span>24 Aug, 2016</span></li>
                    <li>Mobile <span>(124) 823409234</span></li>
                    <li>Email <span>samuel@mydomain.com</span></li>
                    <li>Website <span><a href="https://www.themeineed.com">www.themeineed.com</a></span></li>
                </ul>
            </div>
        </div>
    </div>
</div>