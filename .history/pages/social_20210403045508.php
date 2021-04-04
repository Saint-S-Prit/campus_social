<?php
session_start();
if (empty($_SESSION['social'])) {
    header('Location:../index.php');
}
require_once('inclures/header.php');
$social = true;

require_once('../modeles/message.php');

$nbr_message_non_lu = findAll();
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
                <?= $_SESSION['social']->prenom ?>
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
                        <p>Comptable</p>
                    </a>
                </li>
                <li>
                    <a href="social.php?p=add">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>Ajouter étudiants</p>
                    </a>
                </li>
                <li>
                    <a href="social.php?p=list">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Liste étudiants</p>
                    </a>
                </li>
                <li>
                    <a href="social.php?p=message">
                        <i class="nc-icon nc-email-85"></i>
                        <p>Messages <span style="color: #f04323;font-weight:bold"><?= $nbr_message_non_lu; ?></span></p>
                    </a>
                </li>
                <a href="deconnexion.php"><i class="nc-icon nc-email-85"></i></a>

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

                    <a class="navbar-brand" href="javascript:;">space reservé aux <?= $_SESSION['social']->statut . 's';
                                                                                    ?></a>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="javascript:;">
                                <a href="deconnexion.php">Se Déconnecter<i class="nc-icon nc-button-power"></i></a>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-globe text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Etudiants</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i>
                                Update Now
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-money-coins text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">etudiants payer</p>

                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-calendar-o"></i>
                                Last day
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-vector text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i>
                                In the last hour
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-favourite-28 text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Followers</p>
                                        <p class="card-title">+45K
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i>
                                Update now
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card ">

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-8" style="margin: 0 auto;">
                                    <?php

                                    if (isset($_GET['p'])) {
                                        $p = $_GET['p'];
                                        switch ($p) {
                                            case 'add':
                                                require_once('user/addEtudiant.php');
                                                break;
                                            case 'list':
                                                require_once('user/listEtudiant.php');
                                                break;
                                            case 'edite':
                                                require_once('user/addEtudiant.php');
                                                break;
                                            case 'codifier':
                                                require_once('user/reqEtudiant.php');
                                                break;
                                            case 'message':
                                                require_once('user/boiteMessage.php');
                                                break;


                                            default:
                                                require_once('login.php');
                                                break;
                                        }
                                    }

                                    ?>
                                </div>
                            </div>
                            <!-- <canvas id=chartHours width="400" height="100">
                            </canvas> -->
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats" style="color:#f04323">
                                <i class="fa fa-history"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>