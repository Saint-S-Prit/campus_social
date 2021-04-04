<?php
require_once('../modeles/etudiant.php');


$info = getInfoEtudiant($_SESSION['etudiant']->id);

$info = $info[0];

$site = getSite($info->pavillon_id);
if ($site == 1) {
    $site = "Hôtel du rail";
} else {
    $site = "VCN";
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

<button type="button" class="btn btn-primary">
    Notifications <span class="badge badge-light">4</span>
</button>

<div class="card bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header">vos informations</div>
    <div class="card-body">
        <h5 class="card-title">Light card title</h5>
        <p class="card-text">site: <?= $site; ?></p>
        <p class="card-text">site: <?= $info->pavillon_id; ?></p>
        <p class="card-text">site: <?= $info->chambre; ?></p>
    </div>
</div>
<fieldset>
    <legend>vos informations</legend>

    <p style="color: red;">
        site: <?= $site ?>
    </p>

    <p style="color: red;">
        pavillon: <?= $info->pavillon_id; ?>
    </p>
    <p style="color: red;">
        chambre: <?=  ?>
    </p>
</fieldset>