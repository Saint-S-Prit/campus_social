<!DOCTYPE html>
<html lang="fr">
<?php
include('head.php');
include('top-bar.php');
?>
<title>Plateforme Etudiant</title>

<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                if (isset($_GET['connexion']) && !empty($_GET['connexion'])) {
                    require_once('login_etudiant.php');
                } else {
                    require_once('home.php');
                }
                ?>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>
    <?php
    include('main.php');
    ?>
    <section>
        <p>
            <img src="assets/img/infospace.png" alt="logo du site" />
        </p>
    </section>

    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>
</body>

</html>