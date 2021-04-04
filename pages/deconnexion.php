<?php
session_start();
session_unset();
session_destroy();
session_unset();
header('Location:../index.php');
