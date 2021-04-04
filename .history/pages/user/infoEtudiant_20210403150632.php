<?php
require_once('../modeles/etudiant.php');


$info = getInfoEtudiant($_SESSION['etudiant']->id);

$info = $info[0];

$site = getSite($info->pavillon_id);
if ($site == 1) {
    $site = "Hôtel du rail";
} elseif ($site == 2) {
    $site = "VCN";
} else {
    $site = '';
}

if ($info->pavillon_id == 3) {
    $info->pavillon_id = "a";
} elseif ($info->pavillon_id == 2) {
    $info->pavillon_id = "d";
} elseif ($info->pavillon_id == 1) {
    $info->pavillon_id = "c";
} elseif ($info->pavillon_id == 4) {
    $info->pavillon_id = "b";
}


?>


<div class="card bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header">vos informations</div>

    <div class="card-body">
        <p class="card-text"><span style="color: #f04323;">Site:</span> <?= $site; ?></p>
        <p class="card-text">
        <p class="card-text"><span style="color: #f04323;">Pavillon: </span> <?= $info->pavillon_id; ?></p>
        <p class="card-text"> <span style="color: #f04323;">chambre: </span> <?= $info->chambre; ?></p>
    </div>
</div>