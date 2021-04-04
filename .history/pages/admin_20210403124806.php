<?php
session_start();
if (empty($_SESSION['admin'])) {
    header('Location:../index.php');
}
include('../top-bar.php');
include('../head.php');
echo "lglregorej";
require_once('inclures/header.php');
require_once('../modeles/admin.php');
