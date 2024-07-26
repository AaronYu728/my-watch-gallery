<?php
session_start();
if (isset($_SESSION["username"])) {
    //We originally should go to payment page!!
    if (isset($_GET["message"])) {
        header("Location:home.php");
    }
} else {
    header("Location:login.php");
}
