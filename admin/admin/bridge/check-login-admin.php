<?php
session_start();
if (!isset($_SESSION['adname'])) {
    header("Location:../login-admin.php");
}
?> 