<?php
include_once('../modeles/etudiant.php');
include_once('../modeles/message.php');
$roles = role();

$nbr_message_non_lu = findAll();
var_dump($nbr_message_non_lu);
echo "<br><br>";
$tab = json_decode(json_encode($nbr_message_non_lu), true);


foreach ($tab as $collection) {

?>
    <main role="main" class="container">
        <h1 class="mt-5">Sticky footer</h1>
        <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p>
        <p>Use <a href="../sticky-footer-navbar/">the sticky footer with a fixed navbar</a> if need be, too.</p>
    </main>
<?php
    echo $collection['email'];
    echo $collection['contenu'];
    echo "<br><br>";
}
