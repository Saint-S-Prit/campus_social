<?php
session_unset();
session_reset();
session_destroy();
header('Location:../login.php');
