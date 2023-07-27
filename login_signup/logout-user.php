<?php
include('../session/controllerUserData.php');
audits($_SESSION['userid'], "User logged out", $_SESSION['branch']);
session_start();
session_unset();
session_destroy();
header('location: login.php');
?>