<?php
session_start();
if (empty($_SESSION['etudiant'])) {
    header('Location:../index.php');
}

require_once('inclures/header.php');


?>


<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="../public/assets/img/logo-small.png">
                </div>
                <!-- <p>CT</p> -->
            </a>
            <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                <?= $_SESSION['etudiant']->prenom; ?>
                <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="./dashboard.html">
                        <i class="nc-icon nc-bank"></i>
                        <p><a href="etudiant.php?infos" style="color: #F04323;">mes informations</a></p>
                    </a>
                </li>


                <li class="active ">
                    <a href="./dashboard.html">
                        <i class="nc-icon nc-bank"></i>
                        <p><a href="etudiant.php?message" style="color: #F04323;">message</a></p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>


                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="javascript:;">
                                <a href="deconnexion.php"><i class="nc-icon nc-settings-gear-65"></i>Se Déconnecter</a>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-lg-16 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="numbers">
                                        <a class="navbar-brand">
                                            <?php
                                            if ($_SESSION['etudiant']->genre == "homme") {
                                                echo "Monsieur " . strtoupper($_SESSION['etudiant']->prenom . ' ' . $_SESSION['etudiant']->nom);
                                            } else {
                                                echo "Madame " . strtoupper($_SESSION['etudiant']->prenom . ' ' . $_SESSION['etudiant']->nom);
                                            }

                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i>
                                <?php
                                if ($_SESSION['etudiant']->codifier == "oui") {
                                    echo "<h3 style='color:green'>vous êtes codifier</h3>";
                                    if (empty($_SESSION['etudiant']->chambre)) {
                                        echo "<p>Veuillez cliquez ici pour remplir vos informations <a href='etudiant.php?req'><button class='btn btn-primary'>Cliquez ici</button></a></p>";
                                    }
                                } else {
                                    echo "<h3 style='color:red'>vous n'êtes pas codifier</h3>";
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (!empty($_GET)) {
                ?>
                    <div class="col-lg-16 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="col-6 col-md-6">
                                <div class="numbers">
                                    <a class="navbar-brand" href="javascript:;">
                                        <?php
                                        if (isset($_GET['req'])) {
                                            require_once('user/reqEtudiant.php');
                                        } elseif (isset($_GET['message'])) {
                                            require_once('user/message.php');
                                        } else {
                                            require_once('user/infoEtudiant.php');
                                        }

                                        ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-footer ">
                            <hr>
                            <div class="stats" style="color:#f04323">
                                <i class="fa fa-history" style="color:#F04323"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        require_once('inclures/footer.php');
        include('../top-bar.php');
        ?>