<head>
    <title>Panels | Klorofil - Free Bootstrap Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
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

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Panel Default</h3>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
        </div>
    </div>
    <div class="panel-body">
        <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="col-md-12">
            <div class="profile-detail">
                <div class="profile-info">
                    <h4 class="heading">recherche d'un etudiant</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="recherche" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary" class="form-control" type="submit" name="submit" style="margin-top: 1px;">recherche</button>
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
                if ($site == 1) {
                    $site = "Hôtel du rail";
                } elseif ($site == 2) {
                    $site = "VCN";
                }

                if ($item->pavillon_id  == 3) {
                    $item->pavillon_id  = "a";
                } elseif ($item->pavillon_id  == 2) {
                    $item->pavillon_id  = "d";
                } elseif ($item->pavillon_id  == 1) {
                    $item->pavillon_id  = "c";
                } elseif ($item->pavillon_id  == 4) {
                    $item->pavillon_id  = "b";
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

                                <li>Pavillon <span><a><?= strtoupper($item->pavillon_id) ?></a></span></li>
                                <li>Chambre <span><a><?= $item->chambre ?></a></span></li>
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


<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>