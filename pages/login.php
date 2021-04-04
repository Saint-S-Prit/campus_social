<!DOCTYPE html>
<html lang="fr">
<?php
include('../top-bar.php');
include('../head.php');
?>
<title>Plateforme Etudiant</title>

<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Bon à savoir</h2>
                            <p>Cette plateforme gere continuellement les informations de chaque utilisateurs. <br> Des mise à jours seront faits régulierement pour actualiser les informations de chaque utilisateurs</p>
                            <div class="text-center"><a class="btn-get-started" href="login.php">Se connecter</a></div>
                        </div>
                    </div>
                </div>

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
    include('../main.php');
    ?>
    <section>
        <p>
            <img src="../assets/img/infospace.png" alt="logo du site" />
        </p>
    </section>


    <footer>
        <?php
        include('../footer.php');
        ?>
    </footer>
</body>

</html>