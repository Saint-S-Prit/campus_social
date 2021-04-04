<?php
require_once('../modeles/etudiant.php');


$info = getInfoEtudiant($_SESSION['etudiant']->id);

$info = $info[0];

$site = getSite($info->pavillon_id);
if ($site == 1) {
    $site = "Hôtel du rail";
} else {
    $site = "Hôtel du rail";
}


var_dump($site);

if ($info->pavillon_id == 3) {
    $info->pavillon_id = "a";
} elseif ($info->pavillon_id == 2) {
    $info->pavillon_id = "d";
} elseif ($info->pavillon_id == 1) {
    $info->pavillon_id = "c";
} elseif ($info->pavillon_id == 4) {
    $info->pavillon_id = "b";
}
$site = getSite($info->pavillon_id);

var_dump($site);

?>

<fieldset>
    <legend>vos informations</legend>


    <p style="color: red;">
        pavillon: <?= $info->pavillon_id; ?>
    </p>
    <p style="color: red;">
        chambre: <?= $info->chambre; ?>
    </p>
</fieldset>